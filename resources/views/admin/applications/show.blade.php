@extends('admin.master')
@section('title', 'Admin Dashboard | Application Details')
@section('body')
    <section class="pt-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Application Details <span class="float-end">#{{ $application->id }}</span></h4>
                        </div>
                        <div class="card-body">
                            <!-- Personal Information Section -->
                            <div class="card mb-4">
                                <div class="card-header bg-info text-white">
                                    <h5 class="mb-0">1. Personal Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <strong>First Name:</strong> {{ $application->first_name }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Last Name:</strong> {{ $application->last_name }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Email:</strong> {{ $application->email }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Phone Number:</strong> {{ $application->phone_number }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Date of Birth:</strong> {{ $application->date_of_birth }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Gender:</strong> {{ $application->gender }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Nationality:</strong> {{ $application->nationality }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Country of Residence:</strong> {{ $application->country_of_residence }}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <strong>Current Address:</strong> {{ $application->current_address }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Educational Background Section -->
                            <div class="card mb-4">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0">2. Educational Background</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <strong>Highest Qualification:</strong> {{ $application->highest_qualification }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Institution Name:</strong> {{ $application->institution_name }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Course Name:</strong> {{ $application->course_name }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Graduation Year:</strong> {{ $application->graduation_year }}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <strong>English Test Taken:</strong> {{ $application->english_test_taken ? 'Yes' : 'No' }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Preferences Section -->
                            <div class="card mb-4">
                                <div class="card-header bg-warning text-white">
                                    <h5 class="mb-0">3. Course Preferences</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <strong>Preferred Study Level:</strong> {{ $application->preferred_study_level }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Preferred Subjects:</strong> {{ $application->preferred_subjects }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Preferred Intake Month:</strong> {{ $application->preferred_intake_month }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Preferred Intake Year:</strong> {{ $application->preferred_intake_year }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Preferred Universities:</strong> {{ $application->preferred_universities }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Preferred Cities:</strong> {{ $application->preferred_cities }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Documents Section -->
                            <div class="card mb-4">
                                <div class="card-header bg-danger text-white">
                                    <h5 class="mb-0">4. Documents</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <strong>Academic Certificates:</strong>
                                            @if ($application->academic_certificates_path)
                                                <a href="{{ Storage::disk('public')->url($application->academic_certificates_path) }}" target="_blank" class="btn btn-sm btn-primary">Download</a>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Mark Sheets:</strong>
                                            @if ($application->mark_sheets_path)
                                                <a href="{{ Storage::disk('public')->url($application->mark_sheets_path) }}" target="_blank" class="btn btn-sm btn-primary">Download</a>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>English Test Certificate:</strong>
                                            @if ($application->english_test_certificate_path)
                                                <a href="{{ Storage::disk('public')->url($application->english_test_certificate_path) }}" target="_blank" class="btn btn-sm btn-primary">Download</a>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>CV/Resume:</strong>
                                            @if ($application->cv_resume_path)
                                                <a href="{{ Storage::disk('public')->url($application->cv_resume_path) }}" target="_blank" class="btn btn-sm btn-primary">Download</a>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Personal Statement:</strong>
                                            @if ($application->personal_statement_path)
                                                <a href="{{ Storage::disk('public')->url($application->personal_statement_path) }}" target="_blank" class="btn btn-sm btn-primary">Download</a>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Submitted At:</strong> {{ $application->created_at->format('d M, Y h:i A') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('applications.index') }}" class="btn btn-secondary mt-3">Back to Applications List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection