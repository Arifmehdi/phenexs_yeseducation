<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmation;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontend.pages.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'message' => 'nullable',
            'agree_policy' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        ContactMessage::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully.'
        ], 200);
    }

    public function index()
    {
        $contacts = Contact::latest()->paginate(20);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('success', 'Contact message deleted successfully!');
    }

    private function sendAppointmentEmails(Contact $contact)
    {
        // $emails = [
        //     // $validatedData->email, // User email
        //     // 'marketing@northbengaldairy.com', // Admin email
        // ];
        $adminEmail = 'marketing@northbengaldairy.com';
        Mail::to($adminEmail)->send(new ContactConfirmation($contact));

    }
}