@extends('admin.master')
@section('title', 'Admin Dashboard | Consultation Request Details')
@section('body')
    <section class="pt-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Consultation Request Details <span class="float-end">#{{ $consultation->id }}</span></h4>
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
                                            <strong>First Name:</strong> {{ $consultation->first_name }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Last Name:</strong> {{ $consultation->last_name }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Email:</strong> {{ $consultation->email }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Mobile:</strong> {{ $consultation->mobile }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>WhatsApp:</strong> {{ $consultation->whatsapp ? 'Yes' : 'No' }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <strong>Country of Residence:</strong> {{ $consultation->country_of_residence }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Consultation Details Section -->
                            <div class="card mb-4">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0">2. Consultation Details</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <strong>Preferred Study Level:</strong> {{ $consultation->preferred_study_level }}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <strong>Message:</strong> {{ $consultation->message }}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <strong>Received At:</strong> {{ $consultation->created_at->format('d M, Y h:i A') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('consultations.index') }}" class="btn btn-secondary mt-3">Back to Consultation List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection