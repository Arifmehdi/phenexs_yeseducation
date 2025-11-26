<?php

namespace App\Http\Controllers;

use App\Models\Consultation; // Import the Consultation model
use Illuminate\Http\Request;
use Alert; // Assuming 'Alert' is used for notifications, similar to ContactController

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name'            => 'required|string|max:100',
            'last_name'             => 'required|string|max:100',
            'email'                 => 'required|email|max:150',
            'mobile'                => 'required|string|max:20',
            'whatsapp'              => 'sometimes|boolean', // Allow 'whatsapp' to be present or not, and validate if present
            'country_of_residence'  => 'required|string|max:100',
            'preferred_study_level' => 'nullable|string|max:50',
            'message'               => 'nullable|string',
        ]);


        $validatedData['whatsapp'] = $request->has('whatsapp') ? true : false;


        Consultation::create($validatedData);

        Alert::success('Success', 'Your consultation request has been submitted successfully!');
        return redirect()->back();
    }
}