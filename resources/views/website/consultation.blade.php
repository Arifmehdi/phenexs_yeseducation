@extends('frontend.layouts.master')

@section('title', 'YES Education - Application Form')

@section('meta')
<meta name="description" content="Apply to study in the UK through YES Education">
<meta name="keywords" content="UK study, education application, YES Education">
@endsection

@section('content')
<x-breadcrumb title="Consultation" />
<div class="page-content" style="background-image: url('images/wizard-v4.jpg')">
    <div class="container py-4 mt-5">
        <div class="mx-auto p-4 shadow" style="max-width: 900px;">
            <h2 class="text-center fw-bold mb-2" style="color:#242E69; font-size: 2rem;">
                Planning to Study in the UK?
            </h2>

            <p class="text-center mb-4 py-3 fw-semibold" style="color:#656565; font-size: 1.1rem;">
                Get expert guidance from AHZ specialists on universities, courses, and scholarships.<br>
                Our team ensures a smooth application process, making your study abroad journey hassle-free.
            </p>

            <h2 class="text-center fw-bold mb-4" style="color: red; font-size: 2rem;">
                Book your FREE consultation today!
            </h2>

            <form action="{{ route('consultation.store') }}" method="post">
				@csrf
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                            First Name<span class="text-danger">*</span>
                        </label>
                        <input type="text" name="first_name" class="form-control bg-light" placeholder="Enter first name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                            Last Name<span class="text-danger">*</span>
                        </label>
                        <input type="text" name="last_name" class="form-control bg-light" placeholder="Enter last name">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                            Email<span class="text-danger">*</span>
                        </label>
                        <input type="email" name="email" class="form-control bg-light" placeholder="Enter email address">
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                Mobile<span class="text-danger">*</span>
                            </label>

                            <label style="color:#1D3564; font-size:1rem;">
                                WhatsApp <input type="checkbox" name="whatsapp"  class="ms-2">
                            </label>
                        </div>
                        <input type="tel" name="mobile" class="form-control bg-light" placeholder="Phone Number">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                            Country Of Residence<span class="text-danger">*</span>
                        </label> <br>
                        <select name="country_of_residence" class="form-select bg-light">
                            <option>Select Country</option>
                            <option>United Kingdom</option>
                            <option>Bangladesh</option>
                            <option>India</option>
                            <option>Pakistan</option>
                            <option>Nepal</option>
                            <option>Sri Lanka</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                            Preferred Study Level
                        </label> <br>
                        <select name="preferred_study_level" class="form-select bg-light">
                            <option>Select Level</option>
                            <option>Foundation</option>
                            <option>Undergraduate</option>
                            <option>Postgraduate</option>
                            <option>PhD</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                        Message (Optional)
                    </label>
                    <textarea class="form-control bg-light" rows="4" name="message"></textarea>
                </div>

                <button class="btn w-100 text-white fw-semibold py-3" style="background:#242E69; font-size:1.3rem;">
                    Submit Information
                </button>
            </form>
        </div>
    </div>

</div>
<!-- Student Reviews Section -->
<x-student-reviews />

<x-student-subscription />
@endsection