<?php

use App\Models\Conversation;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('admin-channel', function ($user) {
    return $user->hasRole('admin');
});

Broadcast::channel('chat.{conversationId}', function ($user, $conversationId) {
    $conversation = Conversation::find($conversationId);

    if (!$conversation) {
        return false;
    }

    // Allow if authenticated user is part of the conversation
    if ($user && $conversation->user_id === $user->id) {
        return true;
    }

    // Allow if the guest ID matches (for anonymous users)
    if (!$user && $conversation->guest_id === request()->cookie('guest_id')) {
        return true;
    }

    // Allow if the user is an admin
    if ($user && $user->hasRole('admin')) {
        return true;
    }

    return false;
});
