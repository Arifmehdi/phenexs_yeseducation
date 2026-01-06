<?php

namespace App\Http\Controllers;

use App\Events\AdminNotification;
use App\Events\MessageSent;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    public function startConversation(Request $request)
    {
        $conversation = Conversation::where('user_id', Auth::id())
            ->orWhere('guest_id', $request->cookie('guest_id'))
            ->first();

        if (!$conversation) {
            $guestId = $request->cookie('guest_id', Str::uuid()->toString());
            
            $conversation = Conversation::create([
                'user_id' => Auth::id(),
                'guest_id' => Auth::guest() ? $guestId : null,
                'status' => 'open',
            ]);

            if (Auth::guest() && !$request->hasCookie('guest_id')) {
                // Set cookie for guest user
                return response()->json(['conversation_id' => $conversation->id])->withCookie(cookie('guest_id', $guestId, 60*24*365)); // 1 year
            }
        }

        return response()->json(['conversation_id' => $conversation->id]);
    }

    public function fetchMessages(Conversation $conversation)
    {
        if (Auth::user()?->hasRole('admin')) {
             return response()->json($conversation->messages()->with('user')->get());
        }

        if ($conversation->user_id !== Auth::id() && $conversation->guest_id !== request()->cookie('guest_id')) {
            abort(403);
        }

        return response()->json($conversation->messages()->with('user')->get());
    }

    public function sendMessage(Request $request, Conversation $conversation)
    {
        // Authorize that the current user or guest belongs to this conversation
        if ($conversation->user_id !== Auth::id() && $conversation->guest_id !== request()->cookie('guest_id')) {
            abort(403,"You do not own this conversation.");
        }

        $message = $conversation->messages()->create([
            'user_id' => Auth::id(),
            'body' => $request->input('body'),
        ]);

        broadcast(new MessageSent($message, $conversation))->toOthers();
        broadcast(new AdminNotification($message, $conversation));

        return response()->json(['status' => 'Message Sent!', 'message' => $message]);
    }

    // Admin side methods
    public function getConversations()
    {
        if(!Auth::user()?->hasRole('admin')){
            abort(403);
        }
        $conversations = Conversation::with(['user', 'messages' => function ($query) {
            $query->latest();
        }])->latest()->get();

        return response()->json($conversations);
    }
    
    public function adminIndex()
    {
        menuSubmenu('chats', 'allChats');
        $conversations = Conversation::with(['user', 'admin'])->latest()->get();
        return view('admin.chat.index', compact('conversations'));
    }

    public function adminShow(Conversation $conversation)
    {
        $conversation->load(['user', 'admin', 'messages.user']);
        return view('admin.chat.show', compact('conversation'));
    }

    public function adminReply(Request $request, Conversation $conversation)
    {
        if(!Auth::user()?->hasRole('admin')){
            abort(403);
        }
        $request->validate(['body' => 'required|string']);

        $message = $conversation->messages()->create([
            'user_id' => Auth::id(), // Admin's ID
            'body' => $request->input('body'),
        ]);

        broadcast(new MessageSent($message, $conversation))->toOthers();

        return response()->json(['status' => 'Message Sent!', 'message' => $message]);
    }

    public function closeConversation(Conversation $conversation)
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403);
        }
        $conversation->status = 'closed';
        $conversation->save();
        return response()->json(['status' => 'Conversation closed.']);
    }
}
