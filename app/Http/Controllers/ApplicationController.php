<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Alert; // Assuming 'Alert' is used for notifications
use Illuminate\Support\Facades\Storage; // For file storage

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation
        $validatedData = $request->validate([
            'first_name'            => 'required|string|max:100',
            'last_name'             => 'required|string|max:100',
            'phone_number'          => 'required|string|max:20',
            'email'                 => 'required|email|max:150|unique:applications,email',
            'date_of_birth'         => 'required|date',
            'gender'                => 'required|string|max:20',
            'nationality'           => 'required|string|max:100',
            'country_of_residence'  => 'required|string|max:100',
            'current_address'       => 'required|string',

            'highest_qualification' => 'required|string|max:50',
            'institution_name'      => 'required|string|max:255',
            'course_name'           => 'required|string|max:255',
            'graduation_year'       => 'required|string',
            'english_test_taken'    => 'boolean', // Will be 0 or 1 from checkbox, or false if not present

            'preferred_study_level' => 'required|string|max:50',
            'preferred_subjects'    => 'required|string|max:255',
            'preferred_intake_month'=> 'required|string|max:20',
            'preferred_intake_year' => 'required|string',
            'preferred_universities'=> 'nullable|string',
            'preferred_cities'      => 'nullable|string',

            // Document uploads - 'nullable' if not strictly required
            'academic_certificates_path'         => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'mark_sheets_path'                   => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'english_test_certificate_path'      => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'cv_resume_path'                     => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'personal_statement_path'            => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        // Handle file uploads
        $filePaths = [];
        $fileFields = [
            'academic_certificates',
            'mark_sheets',
            'english_test_certificate',
            'cv_resume',
            'personal_statement'
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $filePath = $request->file($field)->store('applications/documents', 'public');
                $filePaths[$field . '_path'] = $filePath;
            } else {
                $filePaths[$field . '_path'] = null;
            }
        }

        // Combine validated data with file paths
        $applicationData = array_merge($validatedData, $filePaths);

        // 3. Data Saving
        Application::create($applicationData);

        // 4. Redirection/Response
        Alert::success('Success', 'Your application has been submitted successfully!');
        return redirect()->back();
    }
}
