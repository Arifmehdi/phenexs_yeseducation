<?php

namespace App\Http\Controllers;
use App\Models\NewsletterSubscription;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscriptions,email',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        NewsletterSubscription::create([
            'email' => $request->email
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for subscribing.'
        ], 200);
    }
}
