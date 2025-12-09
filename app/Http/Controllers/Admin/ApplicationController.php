<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application; // Import the Application model
use Illuminate\Http\Request;
use Alert; // Assuming 'Alert' is used for notifications
use Illuminate\Support\Facades\Storage; // For file downloads

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('applications', 'allApplications');
        $applications = Application::latest()->paginate(20);
        return view('admin.applications.index', compact('applications'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('admin.applications.show', compact('application'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        // Delete associated files from storage before deleting the record
        $fileFields = [
            'academic_certificates_path',
            'mark_sheets_path',
            'english_test_certificate_path',
            'cv_resume_path',
            'personal_statement_path'
        ];

        foreach ($fileFields as $field) {
            if ($application->$field && Storage::disk('public')->exists($application->$field)) {
                Storage::disk('public')->delete($application->$field);
            }
        }

        $application->delete();

        Alert::success('Success', 'Application deleted successfully!');
        return back();
    }
}