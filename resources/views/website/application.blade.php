@extends('frontend.layouts.master')

@section('title', 'YES Education - Application Form')

@section('meta')
<meta name="description" content="Apply to study in the UK through YES Education">
<meta name="keywords" content="UK study, education application, YES Education">
@endsection

@section('content')
<x-breadcrumb title="Application" />
<div class="page-content" style="background-image: url('images/wizard-v4.jpg')">
    <div class="wizard-v4-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3 class="heading">Sign Up To Financial</h3>
                <p>Fill all form field to go next step</p>
            </div>
            <form class="form-register" action="{{ route('application.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div id="form-total">
                    <!-- SECTION 1 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                        <span class="step-text">Personal</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Personal Information:</h3>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        First Name<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="first_name" class="form-control bg-light @error('first_name') is-invalid @enderror"
                                        placeholder="Enter first name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Last Name<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="last_name" class="form-control bg-light @error('last_name') is-invalid @enderror"
                                        placeholder="Enter last name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                            Phone Number<span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <input type="tel" name="phone_number" class="form-control bg-light @error('phone_number') is-invalid @enderror"
                                        placeholder="Phone Number" value="{{ old('phone_number') }}">
                                    @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                            Email<span class="text-danger">*</span>
                                        </label>
                                    </div>
									<input type="email" name="email" class="form-control bg-light @error('email') is-invalid @enderror"
										placeholder="Email" value="{{ old('email') }}">
									@error('email')
										<div class="text-danger">{{ $message }}</div>
									@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Date of Birth<span class="text-danger">*</span>
                                    </label>
                                    <input type="date" name="date_of_birth" class="form-control bg-light @error('date_of_birth') is-invalid @enderror"
                                        placeholder="Enter email address" value="{{ old('date_of_birth') }}">
                                    @error('date_of_birth')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Gender<span class="text-danger">*</span>
                                    </label> <br>
                                    <select name="gender" id="gender" class="form-control bg-light @error('gender') is-invalid @enderror">
                                        <option value="">Please Select Gender</option>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('gender')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Nationality<span class="text-danger">*</span>
                                    </label> <br>
                                    <select name="nationality" id="nationality" class="form-control bg-light @error('nationality') is-invalid @enderror">
                                        <option label="Please Select" value="" {{ old('nationality') == '' ? 'selected' : '' }}>Please Select Nationality</option>
                                        <option label="Afghanistan" value="Afghanistan" >Afghanistan</option>
                                        <option label="Albania" value="Albania" >Albania</option>
                                        <option label="Algeria" value="Algeria" >Algeria</option>
                                        <option label="American Samoa" value="American Samoa" >American Samoa</option>
                                        <option label="Andorra" value="Andorra" >Andorra</option>
                                        <option label="Angola" value="Angola" >Angola</option>
                                        <option label="Anguilla" value="Anguilla" >Anguilla</option>
                                        <option label="Antarctica" value="Antarctica" >Antarctica</option>
                                        <option label="Antigua and Barbuda" value="Antigua and Barbuda" >Antigua and
                                            Barbuda</option>
                                        <option label="Argentina" value="Argentina" >Argentina</option>
                                        <option label="Armenia" value="Armenia" >Armenia</option>
                                        <option label="Aruba" value="Aruba" >Aruba</option>
                                        <option label="Australia" value="Australia" >Australia</option>
                                        <option label="Austria" value="Austria" >Austria</option>
                                        <option label="Azerbaijan" value="Azerbaijan" >Azerbaijan</option>
                                        <option label="Bahamas" value="Bahamas" >Bahamas</option>
                                        <option label="Bahrain" value="Bahrain" >Bahrain</option>
                                        <option label="Bangladesh" value="Bangladesh" >Bangladesh</option>
                                        <option label="Barbados" value="Barbados" >Barbados</option>
                                        <option label="Belarus" value="Belarus" >Belarus</option>
                                        <option label="Belgium" value="Belgium" >Belgium</option>
                                        <option label="Belize" value="Belize" >Belize</option>
                                        <option label="Benin" value="Benin" >Benin</option>
                                        <option label="Bermuda" value="Bermuda" >Bermuda</option>
                                        <option label="Bhutan" value="Bhutan" >Bhutan</option>
                                        <option label="Bolivia" value="Bolivia" >Bolivia</option>
                                        <option label="Bonaire" value="Bonaire" >Bonaire</option>
                                        <option label="Bosnia and Herzegovina" value="Bosnia and Herzegovina" >Bosnia and
                                            Herzegovina</option>
                                        <option label="Botswana" value="Botswana" >Botswana</option>
                                        <option label="Bouvet Island" value="Bouvet Island" >Bouvet Island</option>
                                        <option label="Brazil" value="Brazil" >Brazil</option>
                                        <option label="British Indian Ocean Territory"
                                            value="British Indian Ocean Territory" >British Indian Ocean Territory
                                        </option>
                                        <option label="British Virgin Islands" value="British Virgin Islands" >British
                                            Virgin Islands</option>
                                        <option label="Brunei" value="Brunei" >Brunei</option>
                                        <option label="Bulgaria" value="Bulgaria" >Bulgaria</option>
                                        <option label="Burkina Faso" value="Burkina Faso" >Burkina Faso</option>
                                        <option label="Burundi" value="Burundi" >Burundi</option>
                                        <option label="Cambodia" value="Cambodia" >Cambodia</option>
                                        <option label="Cameroon" value="Cameroon" >Cameroon</option>
                                        <option label="Canada" value="Canada" >Canada</option>
                                        <option label="Cape Verde" value="Cape Verde" >Cape Verde</option>
                                        <option label="Cayman Islands" value="Cayman Islands" >Cayman Islands</option>
                                        <option label="Central African Republic" value="Central African Republic" >
                                            Central African Republic</option>
                                        <option label="Chad" value="Chad" >Chad</option>
                                        <option label="Chile" value="Chile" >Chile</option>
                                        <option label="China" value="China" >China</option>
                                        <option label="Christmas Island" value="Christmas Island" >Christmas Island
                                        </option>
                                        <option label="Cocos Islands" value="Cocos Islands" >Cocos Islands</option>
                                        <option label="Colgolese/UK" value="Colgolese/UK" >Colgolese/UK</option>
                                        <option label="Colombia" value="Colombia" >Colombia</option>
                                        <option label="Comoros" value="Comoros" >Comoros</option>
                                        <option label="Congo" value="Congo" >Congo</option>
                                        <option label="Cook Islands" value="Cook Islands" >Cook Islands</option>
                                        <option label="Costa Rica" value="Costa Rica" >Costa Rica</option>
                                        <option label="Cote d'Ivoire" value="Cote d'Ivoire" >Cote d'Ivoire</option>
                                        <option label="Croatia" value="Croatia" >Croatia</option>
                                        <option label="Cuba" value="Cuba" >Cuba</option>
                                        <option label="Curaçao" value="Curaçao" >Curaçao</option>
                                        <option label="Cyprus" value="Cyprus" >Cyprus</option>
                                        <option label="Czechia" value="Czechia" >Czechia</option>
                                        <option label="Denmark" value="Denmark" >Denmark</option>
                                        <option label="Djibouti" value="Djibouti" >Djibouti</option>
                                        <option label="Dominica" value="Dominica" >Dominica</option>
                                        <option label="Dominican Republic" value="Dominican Republic" >Dominican Republic
                                        </option>
                                        <option label="Ecuador" value="Ecuador" >Ecuador</option>
                                        <option label="Egypt" value="Egypt" >Egypt</option>
                                        <option label="El Salvador" value="El Salvador" >El Salvador</option>
                                        <option label="Equatorial Guinea" value="Equatorial Guinea" >Equatorial Guinea
                                        </option>
                                        <option label="Eritrea" value="Eritrea" >Eritrea</option>
                                        <option label="Estonia" value="Estonia" >Estonia</option>
                                        <option label="Ethiopia" value="Ethiopia" >Ethiopia</option>
                                        <option label="Falkland Islands" value="Falkland Islands" >Falkland Islands
                                        </option>
                                        <option label="Faroe Islands" value="Faroe Islands" >Faroe Islands</option>
                                        <option label="Fiji" value="Fiji" >Fiji</option>
                                        <option label="Finland" value="Finland" >Finland</option>
                                        <option label="France" value="France" >France</option>
                                        <option label="French Guiana" value="French Guiana" >French Guiana</option>
                                        <option label="French Polynesia" value="French Polynesia" >French Polynesia
                                        </option>
                                        <option label="French Southern Territories" value="French Southern Territories" >
                                            French Southern Territories</option>
                                        <option label="Gabon" value="Gabon" >Gabon</option>
                                        <option label="Gambia" value="Gambia" >Gambia</option>
                                        <option label="Georgia" value="Georgia" >Georgia</option>
                                        <option label="Germany" value="Germany" >Germany</option>
                                        <option label="Ghana" value="Ghana" >Ghana</option>
                                        <option label="Gibraltar" value="Gibraltar" >Gibraltar</option>
                                        <option label="Greece" value="Greece" >Greece</option>
                                        <option label="Greenland" value="Greenland" >Greenland</option>
                                        <option label="Grenada" value="Grenada" >Grenada</option>
                                        <option label="Guadeloupe" value="Guadeloupe" >Guadeloupe</option>
                                        <option label="Guam" value="Guam" >Guam</option>
                                        <option label="Guatemala" value="Guatemala" >Guatemala</option>
                                        <option label="Guernsey" value="Guernsey" >Guernsey</option>
                                        <option label="Guinea" value="Guinea" >Guinea</option>
                                        <option label="Guinea-Bissau" value="Guinea-Bissau" >Guinea-Bissau</option>
                                        <option label="Guyana" value="Guyana" >Guyana</option>
                                        <option label="Haiti" value="Haiti" >Haiti</option>
                                        <option label="Heard Island and McDonald Islands" 
                                            value="Heard Island and McDonald Islands" >Heard Island and McDonald Islands
                                        </option>
                                        <option label="Honduras" value="Honduras" >Honduras</option>
                                        <option label="Hong Kong" value="Hong Kong" >Hong Kong</option>
                                        <option label="Hungary" value="Hungary" >Hungary</option>
                                        <option label="Iceland" value="Iceland" >Iceland</option>
                                        <option label="India" value="India" >India</option>
                                        <option label="Indonesia" value="Indonesia" >Indonesia</option>
                                        <option label="Iran" value="Iran" >Iran</option>
                                        <option label="Iraq" value="Iraq" >Iraq</option>
                                        <option label="Ireland" value="Ireland" >Ireland</option>
                                        <option label="Isle of Man" value="Isle of Man" >Isle of Man</option>
                                        <option label="Israel" value="Israel" >Israel</option>
                                        <option label="Italy" value="Italy" >Italy</option>
                                        <option label="Jamaica" value="Jamaica" >Jamaica</option>
                                        <option label="Japan" value="Japan" >Japan</option>
                                        <option label="Jersey" value="Jersey" >Jersey</option>
                                        <option label="Jordan" value="Jordan" >Jordan</option>
                                        <option label="Kazakhstan" value="Kazakhstan" >Kazakhstan</option>
                                        <option label="Kenya" value="Kenya" >Kenya</option>
                                        <option label="Kiribati" value="Kiribati" >Kiribati</option>
                                        <option label="Kosovo" value="Kosovo" >Kosovo</option>
                                        <option label="Kuwait" value="Kuwait" >Kuwait</option>
                                        <option label="Kyrgyzstan" value="Kyrgyzstan" >Kyrgyzstan</option>
                                        <option label="Laos" value="Laos" >Laos</option>
                                        <option label="Latvia" value="Latvia" >Latvia</option>
                                        <option label="Lebanon" value="Lebanon" >Lebanon</option>
                                        <option label="Lesotho" value="Lesotho" >Lesotho</option>
                                        <option label="Liberia" value="Liberia" >Liberia</option>
                                        <option label="Libya" value="Libya" >Libya</option>
                                        <option label="Liechtenstein" value="Liechtenstein" >Liechtenstein</option>
                                        <option label="Lithuania" value="Lithuania" >Lithuania</option>
                                        <option label="Luxembourg" value="Luxembourg" >Luxembourg</option>
                                        <option label="Macao" value="Macao" >Macao</option>
                                        <option label="Madagascar" value="Madagascar" >Madagascar</option>
                                        <option label="Malawi" value="Malawi" >Malawi</option>
                                        <option label="Malaysia" value="Malaysia" >Malaysia</option>
                                        <option label="Maldives" value="Maldives" >Maldives</option>
                                        <option label="Mali" value="Mali" >Mali</option>
                                        <option label="Malta" value="Malta" >Malta</option>
                                        <option label="Martinique" value="Martinique" >Martinique</option>
                                        <option label="Mauritania" value="Mauritania" >Mauritania</option>
                                        <option label="Mauritius" value="Mauritius" >Mauritius</option>
                                        <option label="Mayotte" value="Mayotte" >Mayotte</option>
                                        <option label="Mexico" value="Mexico" >Mexico</option>
                                        <option label="Moldova" value="Moldova" >Moldova</option>
                                        <option label="Monaco" value="Monaco" >Monaco</option>
                                        <option label="Mongolia" value="Mongolia" >Mongolia</option>
                                        <option label="Montenegro" value="Montenegro" >Montenegro</option>
                                        <option label="Montserrat" value="Montserrat" >Montserrat</option>
                                        <option label="Morocco" value="Morocco" >Moroc co</option>
                                        <option label="Mozambique" value="Mozambique">Mozambique</option>
                                        <option label="Myanmar" value="Myanmar" >Myanmar</option>
                                        <option label="Namibia" value="Namibia" >Namibia</option>
                                        <option label="Nauru" value="Nauru" >Nauru</option>
                                        <option label="Nepal" value="Nepal" >Nepal</option>
                                        <option label="Netherlands" value="Netherlands" >Netherlands</option>
                                        <option label="Netherlands Antilles" value="Netherlands Antilles" >Netherlands
                                            Antilles</option>
                                        <option label="New Caledonia" value="New Caledonia" >New Caledonia</option>
                                        <option label="New Zealand" value="New Zealand" >New Zealand</option>
                                        <option label="Nicaragua" value="Nicaragua" >Nicaragua</option>
                                        <option label="Niger" value="Niger" >Niger</option>
                                        <option label="Nigeria" value="Nigeria" >Nigeria</option>
                                        <option label="Niue" value="Niue" >Niue</option>
                                        <option label="Norfolk Island" value="Norfolk Island" >Norfolk Island</option>
                                        <option label="North Korea" value="North Korea" >North Korea</option>
                                        <option label="North Macedonia" value="North Macedonia" >North Macedonia</option>
                                        <option label="Norway" value="Norway" >Norway</option>
                                        <option label="Oman" value="Oman" >Oman</option>
                                        <option label="Pakistan" value="Pakistan" >Pakistan</option>
                                        <option label="Palau" value="Palau" >Palau</option>
                                        <option label="Palestine" value="Palestine" >Palestine</option>
                                        <option label="Panama" value="Panama" >Panama</option>
                                        <option label="Papua New Guinea" value="Papua New Guinea" >Papua New Guinea
                                        </option>
                                        <option label="Paraguay" value="Paraguay" >Paraguay</option>
                                        <option label="Peru" value="Peru" >Peru</option>
                                        <option label="Philippines" value="Philippines" >Philippines</option>
                                        <option label="Pitcairn" value="Pitcairn" >Pitcairn</option>
                                        <option label="Poland" value="Poland" >Poland</option>
                                        <option label="Portugal" value="Portugal" >Portugal</option>
                                        <option label="Puerto Rico" value="Puerto Rico" >Puerto Rico</option>
                                        <option label="Qatar" value="Qatar"> Qatar</option>
                                        <option label="Reunion" value="Reunion" >Reunion</option>
                                        <option label="Romania" value="Romania" >Romania</option>
                                        <option label="Russia" value="Russia" >Russia</option>
                                        <option label="Rwanda" value="Rwanda" >Rwanda</option>
                                        <option label="Saint Barthélemy" value="Saint Barthélemy" >Saint Barthélemy
                                        </option>
                                        <option label="Saint Helena" value="Saint Helena" >Saint Helena</option>
                                        <option label="Saint Kitts and Nevis" value="Saint Kitts and Nevis" >Saint Kitts
                                            and Nevis</option>
                                        <option label="Saint Lucia" value="Saint Lucia" >Saint Lucia</option>
                                        <option label="Saint Martin" value="Saint Martin" >Saint Martin</option>
                                        <option label="Saint Pierre and Miquelon" value="Saint Pierre and Miquelon" >
                                            Saint Pierre and Miquelon</option>
                                        <option label="Saint Vincent and the Grenadines"
                                            value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines
                                        </option>
                                        <option label="Samoa" value="Samoa" >Samoa</option>
                                        <option label="San Marino" value="San Marino" >San Marino</option>
                                        <option label="Sao Tome and Principe" value="Sao Tome and Principe" >Sao Tome and
                                            Principe</option>
                                        <option label="Saudi Arabia" value="Saudi Arabia" >Saudi Arabia</option>
                                        <option label="Senegal" value="Senegal" >Senegal</option>
                                        <option label="Serbia" value="Serbia" >Serbia</option>
                                        <option label="Seychelles" value="Seychelles" >Seychelles</option>
                                        <option label="Sierra Leone" value="Sierra Leone" >Sierra Leone</option>
                                        <option label="Singapore" value="Singapore" >Singapore</option>
                                        <option label="Sint Maarten" value="Sint Maarten" >Sint Maarten</option>
                                        <option label="Slovakia" value="Slovakia" >Slovakia</option>
                                        <option label="Slovenia" value="Slovenia" >Slovenia</option>
                                        <option label="Solomon Islands" value="Solomon Islands" >Solomon Islands</option>
                                        <option label="Somalia" value="Somalia" >Somalia</option>
                                        <option label="South Africa" value="South Africa" >South Africa</option>
                                        <option label="South Georgia and the South Sandwich Islands"
                                            value="South Georgia and the South Sandwich Islands" >South Georgia and the
                                            South Sandwich Islands</option>
                                        <option label="South Korea" value="South Korea" >South Korea</option>
                                        <option label="South Sudan" value="South Sudan" >South Sudan</option>
                                        <option label="Spain" value="Spain" >Spain</option>
                                        <option label="Sri Lanka" value="Sri Lanka" >Sri Lanka</option>
                                        <option label="Sudan" value="Sudan" >Sudan</option>
                                        <option label="Suriname" value="Suriname" >Suriname</option>
                                        <option label="Svalbard and Jan Mayen" value="Svalbard and Jan Mayen" >Svalbard
                                            and Jan Mayen</option>
                                        <option label="Swaziland" value="Swaziland" >Swaziland</option>
                                        <option label="Sweden" value="Sweden" >Sweden</option>
                                        <option label="Switzerland" value="Switzerland" >Switzerland</option>
                                        <option label="Syria" value="Syria" >Syria</option>
                                        <option label="Taiwan" value="Taiwan" >Taiwan</option>
                                        <option label="Tajikistan" value="Tajikistan" >Tajikistan</option>
                                        <option label="Tanzania" value="Tanzania" >Tanzania</option>
                                        <option label="Thailand" value="Thailand" >Thailand</option>
                                        <option label="Tibet" value="Tibet" >Tibet</option>
                                        <option label="Timor-Leste" value="Timor-Leste" >Timor-Leste</option>
                                        <option label="Togo" value="Togo" >Togo</option>
                                        <option label="Tokelau" value="Tokelau" >Tokelau</option>
                                        <option label="Tonga" value="Tonga" >Tonga</option>
                                        <option label="Trinidad and Tobago" value="Trinidad and Tobago" >Trinidad and
                                            Tobago</option>
                                        <option label="Tunisia" value="Tunisia" >Tunisia</option>
                                        <option label="Turkey" value="Turkey" >Turkey</option>
                                        <option label="Turkmenistan" value="Turkmenistan" >Turkmenistan</option>
                                        <option label="Turks and Caicos Islands" value="Turks and Caicos Islands" >Turks
                                            and Caicos Islands</option>
                                        <option label="Tuvalu" value="Tuvalu" >Tuvalu</option>
                                        <option label="Uganda" value="Uganda" >Uganda</option>
                                        <option label="Ukraine" value="Ukraine" >Ukraine</option>
                                        <option label="United Arab Emirates" value="United Arab Emirates" >United Arab
                                            Emirates</option>
                                        <option label="United Kingdom" value="United Kingdom" >United Kingdom</option>
                                        <option label="United States" value="United States" >United States</option>
                                        <option label="Uruguay" value="Uruguay" >Uruguay</option>
                                        <option label="Uzbekistan" value="Uzbekistan" >Uzbekistan</option>
                                        <option label="Vanuatu" value="Vanuatu">Vanuatu</option>
                                        <option label="Vatican City State" value="Vatican City State" >Vatican City State
                                        </option>
                                        <option label="Venezuela" value="Venezuela" >Venezuela</option>
                                        <option label="Vietnam" value="Vietnam" >Vietnam</option>
                                        <option label="Wallis and Futuna" value="Wallis and Futuna" >Wallis and Futuna
                                        </option>
                                        <option label="Western Sahara" value="Western Sahara" >Western Sahara</option>
                                        <option label="Yemen" value="Yemen" >Yemen</option>
                                        <option label="Zambia" value="Zambia" >Zambia</option>
                                        <option label="Zanzibar" value="Zanzibar" >Zanzibar</option>
                                        <option label="Zimbabwe" value="Zimbabwe" >Zimbabwe</option>

									</select>
									@error('nationality')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Country of Residence<span class="text-danger">*</span>
                                    </label> <br>
                                    <select name="country_of_residence" id="country_of_residence" class="form-control bg-light @error('country_of_residence') is-invalid @enderror">
                                        <option label="Please Select" disabled="" value="">Please Select</option>
                                        <option label="Afghanistan" value="Afghanistan">Afghanistan</option>
                                        <option label="Albania" value="Albania">Albania</option>
                                        <option label="Algeria" value="Algeria">Algeria</option>
                                        <option label="American Samoa" value="American Samoa">American Samoa</option>
                                        <option label="Andorra" value="Andorra">Andorra</option>
                                        <option label="Angola" value="Angola">Angola</option>
                                        <option label="Anguilla" value="Anguilla">Anguilla</option>
                                        <option label="Antarctica" value="Antarctica">Antarctica</option>
                                        <option label="Antigua and Barbuda" value="Antigua and Barbuda">Antigua and
                                            Barbuda</option>
                                        <option label="Argentina" value="Argentina">Argentina</option>
                                        <option label="Armenia" value="Armenia">Armenia</option>
                                        <option label="Aruba" value="Aruba">Aruba</option>
                                        <option label="Australia" value="Australia">Australia</option>
                                        <option label="Austria" value="Austria">Austria</option>
                                        <option label="Azerbaijan" value="Azerbaijan">Azerbaijan</option>
                                        <option label="Bahamas" value="Bahamas">Bahamas</option>
                                        <option label="Bahrain" value="Bahrain">Bahrain</option>
                                        <option label="Bangladesh" value="Bangladesh">Bangladesh</option>
                                        <option label="Barbados" value="Barbados">Barbados</option>
                                        <option label="Belarus" value="Belarus">Belarus</option>
                                        <option label="Belgium" value="Belgium">Belgium</option>
                                        <option label="Belize" value="Belize">Belize</option>
                                        <option label="Benin" value="Benin">Benin</option>
                                        <option label="Bermuda" value="Bermuda">Bermuda</option>
                                        <option label="Bhutan" value="Bhutan">Bhutan</option>
                                        <option label="Bolivia" value="Bolivia">Bolivia</option>
                                        <option label="Bonaire" value="Bonaire">Bonaire</option>
                                        <option label="Bosnia and Herzegovina" value="Bosnia and Herzegovina">Bosnia and
                                            Herzegovina</option>
                                        <option label="Botswana" value="Botswana">Botswana</option>
                                        <option label="Bouvet Island" value="Bouvet Island">Bouvet Island</option>
                                        <option label="Brazil" value="Brazil">Brazil</option>
                                        <option label="British Indian Ocean Territory"
                                            value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option label="British Virgin Islands" value="British Virgin Islands">British
                                            Virgin Islands</option>
                                        <option label="Brunei" value="Brunei">Brunei</option>
                                        <option label="Bulgaria" value="Bulgaria">Bulgaria</option>
                                        <option label="Burkina Faso" value="Burkina Faso">Burkina Faso</option>
                                        <option label="Burundi" value="Burundi">Burundi</option>
                                        <option label="Cambodia" value="Cambodia">Cambodia</option>
                                        <option label="Cameroon" value="Cameroon">Cameroon</option>
                                        <option label="Canada" value="Canada">Canada</option>
                                        <option label="Cape Verde" value="Cape Verde">Cape Verde</option>
                                        <option label="Cayman Islands" value="Cayman Islands">Cayman Islands</option>
                                        <option label="Central African Republic" value="Central African Republic">
                                            Central African Republic</option>
                                        <option label="Chad" value="Chad">Chad</option>
                                        <option label="Chile" value="Chile">Chile</option>
                                        <option label="China" value="China">China</option>
                                        <option label="Christmas Island" value="Christmas Island">Christmas Island
                                        </option>
                                        <option label="Cocos Islands" value="Cocos Islands">Cocos Islands</option>
                                        <option label="Colgolese/UK" value="Colgolese/UK">Colgolese/UK</option>
                                        <option label="Colombia" value="Colombia">Colombia</option>
                                        <option label="Comoros" value="Comoros">Comoros</option>
                                        <option label="Congo" value="Congo">Congo</option>
                                        <option label="Cook Islands" value="Cook Islands">Cook Islands</option>
                                        <option label="Costa Rica" value="Costa Rica">Costa Rica</option>
                                        <option label="Cote d'Ivoire" value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option label="Croatia" value="Croatia">Croatia</option>
                                        <option label="Cuba" value="Cuba">Cuba</option>
                                        <option label="Curaçao" value="Curaçao">Curaçao</option>
                                        <option label="Cyprus" value="Cyprus">Cyprus</option>
                                        <option label="Czechia" value="Czechia">Czechia</option>
                                        <option label="Denmark" value="Denmark">Denmark</option>
                                        <option label="Djibouti" value="Djibouti">Djibouti</option>
                                        <option label="Dominica" value="Dominica">Dominica</option>
                                        <option label="Dominican Republic" value="Dominican Republic">Dominican Republic
                                        </option>
                                        <option label="Ecuador" value="Ecuador">Ecuador</option>
                                        <option label="Egypt" value="Egypt">Egypt</option>
                                        <option label="El Salvador" value="El Salvador">El Salvador</option>
                                        <option label="Equatorial Guinea" value="Equatorial Guinea">Equatorial Guinea
                                        </option>
                                        <option label="Eritrea" value="Eritrea">Eritrea</option>
                                        <option label="Estonia" value="Estonia">Estonia</option>
                                        <option label="Ethiopia" value="Ethiopia">Ethiopia</option>
                                        <option label="Falkland Islands" value="Falkland Islands">Falkland Islands
                                        </option>
                                        <option label="Faroe Islands" value="Faroe Islands">Faroe Islands</option>
                                        <option label="Fiji" value="Fiji">Fiji</option>
                                        <option label="Finland" value="Finland">Finland</option>
                                        <option label="France" value="France">France</option>
                                        <option label="French Guiana" value="French Guiana">French Guiana</option>
                                        <option label="French Polynesia" value="French Polynesia">French Polynesia
                                        </option>
                                        <option label="French Southern Territories" value="French Southern Territories">
                                            French Southern Territories</option>
                                        <option label="Gabon" value="Gabon">Gabon</option>
                                        <option label="Gambia" value="Gambia">Gambia</option>
                                        <option label="Georgia" value="Georgia">Georgia</option>
                                        <option label="Germany" value="Germany">Germany</option>
                                        <option label="Ghana" value="Ghana">Ghana</option>
                                        <option label="Gibraltar" value="Gibraltar">Gibraltar</option>
                                        <option label="Greece" value="Greece">Greece</option>
                                        <option label="Greenland" value="Greenland">Greenland</option>
                                        <option label="Grenada" value="Grenada">Grenada</option>
                                        <option label="Guadeloupe" value="Guadeloupe">Guadeloupe</option>
                                        <option label="Guam" value="Guam">Guam</option>
                                        <option label="Guatemala" value="Guatemala">Guatemala</option>
                                        <option label="Guernsey" value="Guernsey">Guernsey</option>
                                        <option label="Guinea" value="Guinea">Guinea</option>
                                        <option label="Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option label="Guyana" value="Guyana">Guyana</option>
                                        <option label="Haiti" value="Haiti">Haiti</option>
                                        <option label="Heard Island and McDonald Islands"
                                            value="Heard Island and McDonald Islands">Heard Island and McDonald Islands
                                        </option>
                                        <option label="Honduras" value="Honduras">Honduras</option>
                                        <option label="Hong Kong" value="Hong Kong">Hong Kong</option>
                                        <option label="Hungary" value="Hungary">Hungary</option>
                                        <option label="Iceland" value="Iceland">Iceland</option>
                                        <option label="India" value="India">India</option>
                                        <option label="Indonesia" value="Indonesia">Indonesia</option>
                                        <option label="Iran" value="Iran">Iran</option>
                                        <option label="Iraq" value="Iraq">Iraq</option>
                                        <option label="Ireland" value="Ireland">Ireland</option>
                                        <option label="Isle of Man" value="Isle of Man">Isle of Man</option>
                                        <option label="Israel" value="Israel">Israel</option>
                                        <option label="Italy" value="Italy">Italy</option>
                                        <option label="Jamaica" value="Jamaica">Jamaica</option>
                                        <option label="Japan" value="Japan">Japan</option>
                                        <option label="Jersey" value="Jersey">Jersey</option>
                                        <option label="Jordan" value="Jordan">Jordan</option>
                                        <option label="Kazakhstan" value="Kazakhstan">Kazakhstan</option>
                                        <option label="Kenya" value="Kenya">Kenya</option>
                                        <option label="Kiribati" value="Kiribati">Kiribati</option>
                                        <option label="Kosovo" value="Kosovo">Kosovo</option>
                                        <option label="Kuwait" value="Kuwait">Kuwait</option>
                                        <option label="Kyrgyzstan" value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option label="Laos" value="Laos">Laos</option>
                                        <option label="Latvia" value="Latvia">Latvia</option>
                                        <option label="Lebanon" value="Lebanon">Lebanon</option>
                                        <option label="Lesotho" value="Lesotho">Lesotho</option>
                                        <option label="Liberia" value="Liberia">Liberia</option>
                                        <option label="Libya" value="Libya">Libya</option>
                                        <option label="Liechtenstein" value="Liechtenstein">Liechtenstein</option>
                                        <option label="Lithuania" value="Lithuania">Lithuania</option>
                                        <option label="Luxembourg" value="Luxembourg">Luxembourg</option>
                                        <option label="Macao" value="Macao">Macao</option>
                                        <option label="Madagascar" value="Madagascar">Madagascar</option>
                                        <option label="Malawi" value="Malawi">Malawi</option>
                                        <option label="Malaysia" value="Malaysia">Malaysia</option>
                                        <option label="Maldives" value="Maldives">Maldives</option>
                                        <option label="Mali" value="Mali">Mali</option>
                                        <option label="Malta" value="Malta">Malta</option>
                                        <option label="Martinique" value="Martinique">Martinique</option>
                                        <option label="Mauritania" value="Mauritania">Mauritania</option>
                                        <option label="Mauritius" value="Mauritius">Mauritius</option>
                                        <option label="Mayotte" value="Mayotte">Mayotte</option>
                                        <option label="Mexico" value="Mexico">Mexico</option>
                                        <option label="Moldova" value="Moldova">Moldova</option>
                                        <option label="Monaco" value="Monaco">Monaco</option>
                                        <option label="Mongolia" value="Mongolia">Mongolia</option>
                                        <option label="Montenegro" value="Montenegro">Montenegro</option>
                                        <option label="Montserrat" value="Montserrat">Montserrat</option>
                                        <option label="Morocco" value="Morocco">Morocco</option>
                                        <option label="Mozambique" value="Mozambique">Mozambique</option>
                                        <option label="Myanmar" value="Myanmar">Myanmar</option>
                                        <option label="Namibia" value="Namibia">Namibia</option>
                                        <option label="Nauru" value="Nauru">Nauru</option>
                                        <option label="Nepal" value="Nepal">Nepal</option>
                                        <option label="Netherlands" value="Netherlands">Netherlands</option>
                                        <option label="Netherlands Antilles" value="Netherlands Antilles">Netherlands
                                            Antilles</option>
                                        <option label="New Caledonia" value="New Caledonia">New Caledonia</option>
                                        <option label="New Zealand" value="New Zealand">New Zealand</option>
                                        <option label="Nicaragua" value="Nicaragua">Nicaragua</option>
                                        <option label="Niger" value="Niger">Niger</option>
                                        <option label="Nigeria" value="Nigeria">Nigeria</option>
                                        <option label="Niue" value="Niue">Niue</option>
                                        <option label="Norfolk Island" value="Norfolk Island">Norfolk Island</option>
                                        <option label="North Korea" value="North Korea">North Korea</option>
                                        <option label="North Macedonia" value="North Macedonia">North Macedonia</option>
                                        <option label="Norway" value="Norway">Norway</option>
                                        <option label="Oman" value="Oman">Oman</option>
                                        <option label="Pakistan" value="Pakistan">Pakistan</option>
                                        <option label="Palau" value="Palau">Palau</option>
                                        <option label="Palestine" value="Palestine">Palestine</option>
                                        <option label="Panama" value="Panama">Panama</option>
                                        <option label="Papua New Guinea" value="Papua New Guinea">Papua New Guinea
                                        </option>
                                        <option label="Paraguay" value="Paraguay">Paraguay</option>
                                        <option label="Peru" value="Peru">Peru</option>
                                        <option label="Philippines" value="Philippines">Philippines</option>
                                        <option label="Pitcairn" value="Pitcairn">Pitcairn</option>
                                        <option label="Poland" value="Poland">Poland</option>
                                        <option label="Portugal" value="Portugal">Portugal</option>
                                        <option label="Puerto Rico" value="Puerto Rico">Puerto Rico</option>
                                        <option label="Qatar" value="Qatar">Qatar</option>
                                        <option label="Reunion" value="Reunion">Reunion</option>
                                        <option label="Romania" value="Romania">Romania</option>
                                        <option label="Russia" value="Russia">Russia</option>
                                        <option label="Rwanda" value="Rwanda">Rwanda</option>
                                        <option label="Saint Barthélemy" value="Saint Barthélemy">Saint Barthélemy
                                        </option>
                                        <option label="Saint Helena" value="Saint Helena">Saint Helena</option>
                                        <option label="Saint Kitts and Nevis" value="Saint Kitts and Nevis">Saint Kitts
                                            and Nevis</option>
                                        <option label="Saint Lucia" value="Saint Lucia">Saint Lucia</option>
                                        <option label="Saint Martin" value="Saint Martin">Saint Martin</option>
                                        <option label="Saint Pierre and Miquelon" value="Saint Pierre and Miquelon">
                                            Saint Pierre and Miquelon</option>
                                        <option label="Saint Vincent and the Grenadines"
                                            value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                        </option>
                                        <option label="Samoa" value="Samoa">Samoa</option>
                                        <option label="San Marino" value="San Marino">San Marino</option>
                                        <option label="Sao Tome and Principe" value="Sao Tome and Principe">Sao Tome and
                                            Principe</option>
                                        <option label="Saudi Arabia" value="Saudi Arabia">Saudi Arabia</option>
                                        <option label="Senegal" value="Senegal">Senegal</option>
                                        <option label="Serbia" value="Serbia">Serbia</option>
                                        <option label="Seychelles" value="Seychelles">Seychelles</option>
                                        <option label="Sierra Leone" value="Sierra Leone">Sierra Leone</option>
                                        <option label="Singapore" value="Singapore">Singapore</option>
                                        <option label="Sint Maarten" value="Sint Maarten">Sint Maarten</option>
                                        <option label="Slovakia" value="Slovakia">Slovakia</option>
                                        <option label="Slovenia" value="Slovenia">Slovenia</option>
                                        <option label="Solomon Islands" value="Solomon Islands">Solomon Islands</option>
                                        <option label="Somalia" value="Somalia">Somalia</option>
                                        <option label="South Africa" value="South Africa">South Africa</option>
                                        <option label="South Georgia and the South Sandwich Islands"
                                            value="South Georgia and the South Sandwich Islands">South Georgia and the
                                            South Sandwich Islands</option>
                                        <option label="South Korea" value="South Korea">South Korea</option>
                                        <option label="South Sudan" value="South Sudan">South Sudan</option>
                                        <option label="Spain" value="Spain">Spain</option>
                                        <option label="Sri Lanka" value="Sri Lanka">Sri Lanka</option>
                                        <option label="Sudan" value="Sudan">Sudan</option>
                                        <option label="Suriname" value="Suriname">Suriname</option>
                                        <option label="Svalbard and Jan Mayen" value="Svalbard and Jan Mayen">Svalbard
                                            and Jan Mayen</option>
                                        <option label="Swaziland" value="Swaziland">Swaziland</option>
                                        <option label="Sweden" value="Sweden">Sweden</option>
                                        <option label="Switzerland" value="Switzerland">Switzerland</option>
                                        <option label="Syria" value="Syria">Syria</option>
                                        <option label="Taiwan" value="Taiwan">Taiwan</option>
                                        <option label="Tajikistan" value="Tajikistan">Tajikistan</option>
                                        <option label="Tanzania" value="Tanzania">Tanzania</option>
                                        <option label="Thailand" value="Thailand">Thailand</option>
                                        <option label="Tibet" value="Tibet">Tibet</option>
                                        <option label="Timor-Leste" value="Timor-Leste">Timor-Leste</option>
                                        <option label="Togo" value="Togo">Togo</option>
                                        <option label="Tokelau" value="Tokelau">Tokelau</option>
                                        <option label="Tonga" value="Tonga">Tonga</option>
                                        <option label="Trinidad and Tobago" value="Trinidad and Tobago">Trinidad and
                                            Tobago</option>
                                        <option label="Tunisia" value="Tunisia">Tunisia</option>
                                        <option label="Turkey" value="Turkey">Turkey</option>
                                        <option label="Turkmenistan" value="Turkmenistan">Turkmenistan</option>
                                        <option label="Turks and Caicos Islands" value="Turks and Caicos Islands">Turks
                                            and Caicos Islands</option>
                                        <option label="Tuvalu" value="Tuvalu">Tuvalu</option>
                                        <option label="Uganda" value="Uganda">Uganda</option>
                                        <option label="Ukraine" value="Ukraine">Ukraine</option>
                                        <option label="United Arab Emirates" value="United Arab Emirates">United Arab
                                            Emirates</option>
                                        <option label="United Kingdom" value="United Kingdom">United Kingdom</option>
                                        <option label="United States" value="United States">United States</option>
                                        <option label="Uruguay" value="Uruguay">Uruguay</option>
                                        <option label="Uzbekistan" value="Uzbekistan">Uzbekistan</option>
                                        <option label="Vanuatu" value="Vanuatu">Vanuatu</option>
                                        <option label="Vatican City State" value="Vatican City State">Vatican City State
                                        </option>
                                        <option label="Venezuela" value="Venezuela">Venezuela</option>
                                        <option label="Vietnam" value="Vietnam">Vietnam</option>
                                        <option label="Wallis and Futuna" value="Wallis and Futuna">Wallis and Futuna
                                        </option>
                                        <option label="Western Sahara" value="Western Sahara">Western Sahara</option>
                                        <option label="Yemen" value="Yemen">Yemen</option>
                                        <option label="Zambia" value="Zambia">Zambia</option>
                                        <option label="Zanzibar" value="Zanzibar">Zanzibar</option>
                                        <option label="Zimbabwe" value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    @error('country_of_residence')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Current Address <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="current_address" class="form-control bg-light @error('current_address') is-invalid @enderror"
                                        placeholder="Current Address ">
                                    @error('current_address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 2 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                        <span class="step-text">Education</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Educational Background:</h3>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Highest Qualification Achieved<span class="text-danger">*</span>
                                    </label>
                                    <select id="highest_qualification-input" name="highest_qualification"
                                        class="form-control @error('highest_qualification') is-invalid @enderror" required="" aria-invalid="true" aria-required="true">
                                        <option label="Please Select" disabled="" value="">Please Select</option>
                                        <option label="O Level" value="O Level">O Level</option>
                                        <option label="A Level/High School" value="A Level">A Level/High School</option>
                                        <option label="Diploma" value="Level 3">Diploma</option>
                                        <option label="Bachelor" value="Level 6">Bachelor</option>
                                        <option label="Masters" value="Level 7">Masters</option>
                                        <option label="Mphill" value="Mphill">Mphill</option>
                                        <option label="DBA" value="DBA">DBA</option>
                                        <option label="Other" value="Other">Other</option>
                                    </select>
                                    @error('highest_qualification')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Name of Institution<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="institution_name" class="form-control bg-light @error('institution_name') is-invalid @enderror"
                                        placeholder="Name of Institution">
                                    @error('institution_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                            Course Name<span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <input type="text" name="course_name" class="form-control bg-light @error('course_name') is-invalid @enderror"
                                        placeholder="Course Name">
                                    @error('course_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Graduation Year<span class="text-danger">*</span>
                                    </label>
                                    <input type="date" name="graduation_year" class="form-control bg-light @error('graduation_year') is-invalid @enderror"
                                        placeholder="Graduation Year">
									
                                    @error('graduation_year')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                            Have you taken any English language test?<span
                                                class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <select name="english_lang_test" id="gender" class="form-control bg-light @error('english_lang_test') is-invalid @enderror">
										<option value="1">Yes</option>
										<option value="0">No</option>
									</select>
									 
                                    @error('english_lang_test')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                        <span class="step-text">Course</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Course Preferences:</h3>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Preferred Study Level <span class="text-danger">*</span>
                                    </label>
                                    <select id="preferred_study_level-input" name="preferred_study_level"
                                        class="form-control @error('preferred_study_level') is-invalid @enderror" required="" aria-invalid="true" aria-required="true"
                                        data-gtm-form-interact-field-id="9">
                                        <option label="Please Select" disabled="" value="">Please Select</option>
                                        <option label="Postgraduate" value="Postgraduate">Postgraduate</option>
                                        <option label="Undergraduate" value="Undergraduate">Undergraduate</option>
                                        <option label="Foundation" value="Foundation">Foundation</option>
                                        <option label="PhD" value="PhD">PhD</option>
                                        <option label="Top Up" value="Top Up">Top Up</option>
                                        <option label="Pre Masters" value="Pre Masters">Pre Masters</option>
                                        <option label="Other" value="Other">Other</option>
                                        <option label="MRes" value="MRes">MRes</option>
                                    </select>
									 
                                    @error('preferred_study_level')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Preferred Subjects<span class="text-danger">*</span>
                                    </label>
                                    <select id="preferred_subjects-input" name="preferred_subjects" class="form-control @error('preferred_subjects') is-invalid @enderror"
                                        required="" aria-invalid="false" aria-required="true">
                                        <option label="Please Select" disabled="" value="">Please Select</option>
                                        <option label="Accounting and Finance" value="Accounting and Finance">Accounting
                                            and Finance</option>
                                        <option label="Aerospace Engineering" value="Aerospace Engineering">Aerospace
                                            Engineering</option>
                                        <option label="Animation" value="Animation">Animation</option>
                                        <option label="Anthropology" value="Anthropology">Anthropology</option>
                                        <option label="Architecture" value="Architecture">Architecture</option>
                                        <option label="Art" value="Art">Art</option>
                                        <option label="Artificial Intelligence" value="Artificial Intelligence">
                                            Artificial Intelligence</option>
                                        <option label="Archaeology" value="Archaeology">Archaeology</option>
                                        <option label="Biomedical Science" value="Biomedical Science">Biomedical Science
                                        </option>
                                        <option label="Biological Sciences" value="Biological Sciences">Biological
                                            Sciences</option>
                                        <option label="Biomedical Engineering" value="Biomedical Engineering">Biomedical
                                            Engineering</option>
                                        <option label="Biotechnology" value="Biotechnology">Biotechnology</option>
                                        <option label="Business Administration" value="Business Administration">Business
                                            Administration</option>
                                        <option label="Business and Management" value="Business and Management">Business
                                            and Management</option>
                                        <option label="Chemistry" value="Chemistry">Chemistry</option>
                                        <option label="Computer Science" value="Computer Science">Computer Science
                                        </option>
                                        <option label="Criminology" value="Criminology">Criminology</option>
                                        <option label="Chemical Engineering" value="Chemical Engineering">Chemical
                                            Engineering</option>
                                        <option label="Computer Engineering" value="Computer Engineering">Computer
                                            Engineering</option>
                                        <option label="Chartered Accountant" value="Chartered Accountant">Chartered
                                            Accountant</option>
                                        <option label="Development Studies" value="Development Studies">Development
                                            Studies</option>
                                        <option label="Digital Media" value="Digital Media">Digital Media</option>
                                        <option label="Economics" value="Economics">Economics</option>
                                        <option label="Ethical Hacking" value="Ethical Hacking">Ethical Hacking</option>
                                        <option label="Education Studies" value="Education Studies">Education Studies
                                        </option>
                                        <option label="Engineering" value="Engineering">Engineering</option>
                                        <option label="Electronics Engineering" value="Electronics Engineering">
                                            Electronics Engineering</option>
                                        <option label="English Literature" value="English Literature">English Literature
                                        </option>
                                        <option label="Environmental Engineering" value="Environmental Engineering">
                                            Environmental Engineering</option>
                                        <option label="Fashion Design" value="Fashion Design">Fashion Design</option>
                                        <option label="Forensic Psychology" value="Forensic Psychology">Forensic
                                            Psychology</option>
                                        <option label="Film Production" value="Film Production">Film Production</option>
                                        <option label="Film Studies" value="Film Studies">Film Studies</option>
                                        <option label="Food Science" value="Food Science">Food Science</option>
                                        <option label="Forensic Science" value="Forensic Science">Forensic Science
                                        </option>
                                        <option label="Geography" value="Geography">Geography</option>
                                        <option label="Hospitality and Tourism" value="Hospitality and Tourism">
                                            Hospitality and Tourism</option>
                                        <option label="Hotel Management" value="Hotel Management">Hotel Management
                                        </option>
                                        <option label="Health Studies" value="Health Studies">Health Studies</option>
                                        <option label="Health Science" value="Health Science">Health Science</option>
                                        <option label="Human Resources Management" value="Human Resources Management">
                                            Human Resources Management</option>
                                        <option label="Interior Design" value="Interior Design">Interior Design</option>
                                        <option label="Information Systems" value="Information Systems">Information
                                            Systems</option>
                                        <option label="International Relations" value="International Relations">
                                            International Relations</option>
                                        <option label="Industrial Engineering" value="Industrial Engineering">Industrial
                                            Engineering</option>
                                        <option label="International Business" value="International Business">
                                            International Business</option>
                                        <option label="Journalism" value="Journalism">Journalism</option>
                                        <option label="Life Sciences" value="Life Sciences">Life Sciences</option>
                                        <option label="Law" value="Law">Law</option>
                                        <option label="MBA" value="MBA">MBA</option>
                                        <option label="Marketing" value="Marketing">Marketing</option>
                                        <option label="Mathematics" value="Mathematics">Mathematics</option>
                                        <option label="Media and Communications" value="Media and Communications">Media
                                            and Communications</option>
                                        <option label="Medicine" value="Medicine">Medicine</option>
                                        <option label="Music" value="Music">Music</option>
                                        <option label="Nursing" value="Nursing">Nursing</option>
                                        <option label="Oil and Gas Engineering and Management"
                                            value="Oil and Gas Engineering and Management">Oil and Gas Engineering and
                                            Management</option>
                                        <option label="Pharmacy" value="Pharmacy">Pharmacy</option>
                                        <option label="Photography" value="Photography">Photography</option>
                                        <option label="Physics" value="Physics">Physics</option>
                                        <option label="Philosophy" value="Philosophy">Philosophy</option>
                                        <option label="Physiotherapy" value="Physiotherapy">Physiotherapy</option>
                                        <option label="Politics" value="Politics">Politics</option>
                                        <option label="Project Management" value="Project Management">Project Management
                                        </option>
                                        <option label="Psychology" value="Psychology">Psychology</option>
                                        <option label="Pharmacology" value="Pharmacology">Pharmacology</option>
                                        <option label="Radiography" value="Radiography">Radiography</option>
                                        <option label="Robotics Engineering" value="Robotics Engineering">Robotics
                                            Engineering</option>
                                        <option label="Social Work" value="Social Work">Social Work</option>
                                        <option label="Sociology" value="Sociology">Sociology</option>
                                        <option label="Sales and Marketing" value="Sales and Marketing">Sales and
                                            Marketing</option>
                                        <option label="Speech Therapy" value="Speech Therapy">Speech Therapy</option>
                                        <option label="Structural Engineering" value="Structural Engineering">Structural
                                            Engineering</option>
                                        <option label="Sports Science" value="Sports Science">Sports Science</option>
                                    </select>
									
                                    @error('preferred_subjects')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Preferred Intake Month<span class="text-danger">*</span>
                                    </label>
                                    <select name="preferred_intake_month" class="form-control @error('preferred_intake_month') is-invalid @enderror"" required="" aria-invalid="true" aria-required="true">
                                        <option value="" disabled="">Please Select</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
									@error('preferred_intake_month')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Preferred Intake Year<span class="text-danger">*</span>
                                    </label> <br>
                                    <select name="preferred_intake_year" class="form-control @error('preferred_intake_year') is-invalid @enderror" required="" aria-invalid="false"
                                        aria-required="true">
                                        <option value="" disabled="">Please Select</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                    </select>
									@error('preferred_intake_year')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Preferred Universities (if any) <span class="text-danger">*</span>
                                    </label>
                                    <select id="preferred_universities" name="preferred_universities"
                                        class="form-control @error('preferred_universities') is-invalid @enderror" required="" aria-invalid="true" aria-required="true">
                                        <option label="Please Select" disabled="" value="">Please Select</option>
                                        <option label="Abertay University" value="Abertay University">Abertay University
                                        </option>
                                        <option label="Aberystwyth University" value="Aberystwyth University">
                                            Aberystwyth University</option>
                                        <option label="Anglia Ruskin University" value="Anglia Ruskin University">Anglia
                                            Ruskin University</option>
                                        <option label="Arden University" value="Arden University">Arden University
                                        </option>
                                        <option label="Arts University Bournemouth" value="Arts University Bournemouth">
                                            Arts University Bournemouth</option>
                                        <option label="Arts University Plymouth" value="Arts University Plymouth">Arts
                                            University Plymouth</option>
                                        <option label="Aston University" value="Aston University">Aston University
                                        </option>
                                        <option label="Bangor University" value="Bangor University">Bangor University
                                        </option>
                                        <option label="Bath Spa University" value="Bath Spa University">Bath Spa
                                            University</option>
                                        <option label="BIMM University" value="BIMM University">BIMM University</option>
                                        <option label="Birmingham City University" value="Birmingham City University">
                                            Birmingham City University</option>
                                        <option label="Birmingham Newman University"
                                            value="Birmingham Newman University">Birmingham Newman University</option>
                                        <option label="Bishop Grosseteste University"
                                            value="Bishop Grosseteste University">Bishop Grosseteste University</option>
                                        <option label="Bournemouth University" value="Bournemouth University">
                                            Bournemouth University</option>
                                        <option label="BPP University" value="BPP University">BPP University</option>
                                        <option label="Brunel University London" value="Brunel University London">Brunel
                                            University London</option>
                                        <option label="Buckinghamshire New University"
                                            value="Buckinghamshire New University">Buckinghamshire New University
                                        </option>
                                        <option label="Canterbury Christ Church University"
                                            value="Canterbury Christ Church University">Canterbury Christ Church
                                            University</option>
                                        <option label="Cardiff Metropolitan University"
                                            value="Cardiff Metropolitan University">Cardiff Metropolitan University
                                        </option>
                                        <option label="Cardiff University" value="Cardiff University">Cardiff University
                                        </option>
                                        <option label="Coventry University" value="Coventry University">Coventry
                                            University</option>
                                        <option label="Cranfield University" value="Cranfield University">Cranfield
                                            University</option>
                                        <option label="De Montfort University" value="De Montfort University">De
                                            Montfort University</option>
                                        <option label="Durham University" value="Durham University">Durham University
                                        </option>
                                        <option label="Edge Hill University" value="Edge Hill University">Edge Hill
                                            University</option>
                                        <option label="Edinburgh Napier University" value="Edinburgh Napier University">
                                            Edinburgh Napier University</option>
                                        <option label="Falmouth University" value="Falmouth University">Falmouth
                                            University</option>
                                        <option label="Glasgow Caledonian University"
                                            value="Glasgow Caledonian University">Glasgow Caledonian University</option>
                                        <option label="Harper Adams University" value="Harper Adams University">Harper
                                            Adams University</option>
                                        <option label="Hartpury University" value="Hartpury University">Hartpury
                                            University</option>
                                        <option label="Heriot-Watt University" value="Heriot-Watt University">
                                            Heriot-Watt University</option>
                                        <option label="Imperial College London" value="Imperial College London">Imperial
                                            College London</option>
                                        <option label="Keele University" value="Keele University">Keele University
                                        </option>
                                        <option label="Kingston University" value="Kingston University">Kingston
                                            University</option>
                                        <option label="Lancaster University" value="Lancaster University">Lancaster
                                            University</option>
                                        <option label="Leeds Arts University[6]" value="Leeds Arts University[6]">Leeds
                                            Arts University[6]</option>
                                        <option label="Leeds Beckett University" value="Leeds Beckett University">Leeds
                                            Beckett University</option>
                                        <option label="Leeds Trinity University" value="Leeds Trinity University">Leeds
                                            Trinity University</option>
                                        <option label="Liverpool Hope University" value="Liverpool Hope University">
                                            Liverpool Hope University</option>
                                        <option label="Liverpool John Moores University"
                                            value="Liverpool John Moores University">Liverpool John Moores University
                                        </option>
                                        <option label="London Metropolitan University"
                                            value="London Metropolitan University">London Metropolitan University
                                        </option>
                                        <option label="London School of Economics" value="London School of Economics">
                                            London School of Economics</option>
                                        <option label="London South Bank University"
                                            value="London South Bank University">London South Bank University</option>
                                        <option label="Loughborough University" value="Loughborough University">
                                            Loughborough University</option>
                                        <option label="Manchester Metropolitan University"
                                            value="Manchester Metropolitan University">Manchester Metropolitan
                                            University</option>
                                        <option label="Middlesex University" value="Middlesex University">Middlesex
                                            University</option>
                                        <option label="Newcastle University" value="Newcastle University">Newcastle
                                            University</option>
                                        <option label="Northeastern University – London[8]"
                                            value="Northeastern University – London[8]">Northeastern University –
                                            London[8]</option>
                                        <option label="Northumbria University" value="Northumbria University">
                                            Northumbria University</option>
                                        <option label="Norwich University of the Arts"
                                            value="Norwich University of the Arts">Norwich University of the Arts
                                        </option>
                                        <option label="Nottingham Trent University" value="Nottingham Trent University">
                                            Nottingham Trent University</option>
                                        <option label="Oxford Brookes University" value="Oxford Brookes University">
                                            Oxford Brookes University</option>
                                        <option label="Plymouth Marjon University" value="Plymouth Marjon University">
                                            Plymouth Marjon University</option>
                                        <option label="Queen Margaret University" value="Queen Margaret University">
                                            Queen Margaret University</option>
                                        <option label="Queen's University Belfast" value="Queen's University Belfast">
                                            Queen's University Belfast</option>
                                        <option label="Ravensbourne University" value="Ravensbourne University">
                                            Ravensbourne University</option>
                                        <option label="Regent's University London" value="Regent's University London">
                                            Regent's University London</option>
                                        <option label="Richmond American University London"
                                            value="Richmond American University London">Richmond American University
                                            London</option>
                                        <option label="Robert Gordon University" value="Robert Gordon University">Robert
                                            Gordon University</option>
                                        <option label="Roehampton University" value="Roehampton University">Roehampton
                                            University</option>
                                        <option label="Royal Agricultural University"
                                            value="Royal Agricultural University">Royal Agricultural University</option>
                                        <option label="Royal Holloway, University of London[11]"
                                            value="Royal Holloway, University of London[11]">Royal Holloway, University
                                            of London[11]</option>
                                        <option label="Sheffield Hallam University" value="Sheffield Hallam University">
                                            Sheffield Hallam University</option>
                                        <option label="Solent University" value="Solent University">Solent University
                                        </option>
                                        <option label="St George's, University of London[12]"
                                            value="St George's, University of London[12]">St George's, University of
                                            London[12]</option>
                                        <option label="St Mary's University, Twickenham"
                                            value="St Mary's University, Twickenham">St Mary's University, Twickenham
                                        </option>
                                        <option label="Staffordshire University" value="Staffordshire University">
                                            Staffordshire University</option>
                                        <option label="Swansea University" value="Swansea University">Swansea University
                                        </option>
                                        <option label="Teesside University" value="Teesside University">Teesside
                                            University</option>
                                        <option label="The Open University" value="The Open University">The Open
                                            University</option>
                                        <option label="Ulster University" value="Ulster University">Ulster University
                                        </option>
                                        <option label="University College Birmingham"
                                            value="University College Birmingham">University College Birmingham</option>
                                        <option label="University College London" value="University College London">
                                            University College London</option>
                                        <option label="University for the Creative Arts"
                                            value="University for the Creative Arts">University for the Creative Arts
                                        </option>
                                        <option label="University of Aberdeen" value="University of Aberdeen">University
                                            of Aberdeen</option>
                                        <option label="University of Bath" value="University of Bath">University of Bath
                                        </option>
                                        <option label="University of Bedfordshire" value="University of Bedfordshire">
                                            University of Bedfordshire</option>
                                        <option label="University of Birmingham" value="University of Birmingham">
                                            University of Birmingham</option>
                                        <option label="University of Bolton" value="University of Bolton">University of
                                            Bolton</option>
                                        <option label="University of Bradford" value="University of Bradford">University
                                            of Bradford</option>
                                        <option label="University of Brighton" value="University of Brighton">University
                                            of Brighton</option>
                                        <option label="University of Bristol" value="University of Bristol">University
                                            of Bristol</option>
                                        <option label="University of Buckingham" value="University of Buckingham">
                                            University of Buckingham</option>
                                        <option label="University of Cambridge" value="University of Cambridge">
                                            University of Cambridge</option>
                                        <option label="University of Central Lancashire"
                                            value="University of Central Lancashire">University of Central Lancashire
                                        </option>
                                        <option label="University of Chester" value="University of Chester">University
                                            of Chester</option>
                                        <option label="University of Chichester" value="University of Chichester">
                                            University of Chichester</option>
                                        <option label="University of Cumbria" value="University of Cumbria">University
                                            of Cumbria</option>
                                        <option label="University of Derby" value="University of Derby">University of
                                            Derby</option>
                                        <option label="University of Dundee" value="University of Dundee">University of
                                            Dundee</option>
                                        <option label="University of East Anglia" value="University of East Anglia">
                                            University of East Anglia</option>
                                        <option label="University of East London" value="University of East London">
                                            University of East London</option>
                                        <option label="University of Edinburgh" value="University of Edinburgh">
                                            University of Edinburgh</option>
                                        <option label="University of Essex" value="University of Essex">University of
                                            Essex</option>
                                        <option label="University of Exeter" value="University of Exeter">University of
                                            Exeter</option>
                                        <option label="University of Glasgow" value="University of Glasgow">University
                                            of Glasgow</option>
                                        <option label="University of Gloucestershire"
                                            value="University of Gloucestershire">University of Gloucestershire</option>
                                        <option label="University of Greenwich" value="University of Greenwich">
                                            University of Greenwich</option>
                                        <option label="University of Hertfordshire" value="University of Hertfordshire">
                                            University of Hertfordshire</option>
                                        <option label="University of Huddersfield" value="University of Huddersfield">
                                            University of Huddersfield</option>
                                        <option label="University of Hull" value="University of Hull">University of Hull
                                        </option>
                                        <option label="University of Kent" value="University of Kent">University of Kent
                                        </option>
                                        <option label="University of Law" value="University of Law">University of Law
                                        </option>
                                        <option label="University of Leeds" value="University of Leeds">University of
                                            Leeds</option>
                                        <option label="University of Leicester" value="University of Leicester">
                                            University of Leicester</option>
                                        <option label="University of Lincoln" value="University of Lincoln">University
                                            of Lincoln</option>
                                        <option label="University of Liverpool" value="University of Liverpool">
                                            University of Liverpool</option>
                                        <option label="University of London" value="University of London">University of
                                            London</option>
                                        <option label="University of Manchester" value="University of Manchester">
                                            University of Manchester</option>
                                        <option label="University of Northampton" value="University of Northampton">
                                            University of Northampton</option>
                                        <option label="University of Nottingham" value="University of Nottingham">
                                            University of Nottingham</option>
                                        <option label="University of Oxford" value="University of Oxford">University of
                                            Oxford</option>
                                        <option label="University of Plymouth" value="University of Plymouth">University
                                            of Plymouth</option>
                                        <option label="University of Portsmouth" value="University of Portsmouth">
                                            University of Portsmouth</option>
                                        <option label="University of Reading" value="University of Reading">University
                                            of Reading</option>
                                        <option label="University of Salford" value="University of Salford">University
                                            of Salford</option>
                                        <option label="University of Sheffield" value="University of Sheffield">
                                            University of Sheffield</option>
                                        <option label="University of South Wales" value="University of South Wales">
                                            University of South Wales</option>
                                        <option label="University of Southampton" value="University of Southampton">
                                            University of Southampton</option>
                                        <option label="University of St Andrews" value="University of St Andrews">
                                            University of St Andrews</option>
                                        <option label="University of Stirling" value="University of Stirling">University
                                            of Stirling</option>
                                        <option label="University of Strathclyde" value="University of Strathclyde">
                                            University of Strathclyde</option>
                                        <option label="University of Suffolk" value="University of Suffolk">University
                                            of Suffolk</option>
                                        <option label="University of Sunderland" value="University of Sunderland">
                                            University of Sunderland</option>
                                        <option label="University of Surrey" value="University of Surrey">University of
                                            Surrey</option>
                                        <option label="University of Sussex" value="University of Sussex">University of
                                            Sussex</option>
                                        <option label="University of the Arts London"
                                            value="University of the Arts London">University of the Arts London</option>
                                        <option label="University of the Highlands and Islands"
                                            value="University of the Highlands and Islands">University of the Highlands
                                            and Islands</option>
                                        <option label="University of the West of England"
                                            value="University of the West of England">University of the West of England
                                        </option>
                                        <option label="University of the West of Scotland"
                                            value="University of the West of Scotland">University of the West of
                                            Scotland</option>
                                        <option label="University of Wales" value="University of Wales">University of
                                            Wales</option>
                                        <option label="University of Wales Trinity Saint David"
                                            value="University of Wales Trinity Saint David">University of Wales Trinity
                                            Saint David</option>
                                        <option label="University of Warwick" value="University of Warwick">University
                                            of Warwick</option>
                                        <option label="University of West London" value="University of West London">
                                            University of West London</option>
                                        <option label="University of Westminster" value="University of Westminster">
                                            University of Westminster</option>
                                        <option label="University of Winchester" value="University of Winchester">
                                            University of Winchester</option>
                                        <option label="University of Wolverhampton" value="University of Wolverhampton">
                                            University of Wolverhampton</option>
                                        <option label="University of Worcester" value="University of Worcester">
                                            University of Worcester</option>
                                        <option label="University of York" value="University of York">University of York
                                        </option>
                                        <option label="Wrexham University" value="Wrexham University">Wrexham University
                                        </option>
                                        <option label="York St John University" value="York St John University">York St
                                            John University</option>
                                    </select>
									@error('preferred_universities')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Preferred Cities in the UK (if any)<span class="text-danger">*</span>
                                    </label>
                                    <select id="preferred_cities" name="preferred_cities"
                                        class="form-control @error('preferred_cities') is-invalid @enderror" required="" aria-invalid="true" aria-required="true">
                                        <option label="Please Select" disabled="" value="">Please Select</option>
                                        <option label="Abertay University" value="Abertay University">Abertay University
                                        </option>
                                        <option label="Aberystwyth University" value="Aberystwyth University">
                                            Aberystwyth University</option>
                                        <option label="Anglia Ruskin University" value="Anglia Ruskin University">Anglia
                                            Ruskin University</option>
                                        <option label="Arden University" value="Arden University">Arden University
                                        </option>
                                        <option label="Arts University Bournemouth" value="Arts University Bournemouth">
                                            Arts University Bournemouth</option>
                                        <option label="Arts University Plymouth" value="Arts University Plymouth">Arts
                                            University Plymouth</option>
                                        <option label="Aston University" value="Aston University">Aston University
                                        </option>
                                        <option label="Bangor University" value="Bangor University">Bangor University
                                        </option>
                                        <option label="Bath Spa University" value="Bath Spa University">Bath Spa
                                            University</option>
                                        <option label="BIMM University" value="BIMM University">BIMM University</option>
                                        <option label="Birmingham City University" value="Birmingham City University">
                                            Birmingham City University</option>
                                        <option label="Birmingham Newman University"
                                            value="Birmingham Newman University">Birmingham Newman University</option>
                                        <option label="Bishop Grosseteste University"
                                            value="Bishop Grosseteste University">Bishop Grosseteste University</option>
                                        <option label="Bournemouth University" value="Bournemouth University">
                                            Bournemouth University</option>
                                        <option label="BPP University" value="BPP University">BPP University</option>
                                        <option label="Brunel University London" value="Brunel University London">Brunel
                                            University London</option>
                                        <option label="Buckinghamshire New University"
                                            value="Buckinghamshire New University">Buckinghamshire New University
                                        </option>
                                        <option label="Canterbury Christ Church University"
                                            value="Canterbury Christ Church University">Canterbury Christ Church
                                            University</option>
                                        <option label="Cardiff Metropolitan University"
                                            value="Cardiff Metropolitan University">Cardiff Metropolitan University
                                        </option>
                                        <option label="Cardiff University" value="Cardiff University">Cardiff University
                                        </option>
                                        <option label="Coventry University" value="Coventry University">Coventry
                                            University</option>
                                        <option label="Cranfield University" value="Cranfield University">Cranfield
                                            University</option>
                                        <option label="De Montfort University" value="De Montfort University">De
                                            Montfort University</option>
                                        <option label="Durham University" value="Durham University">Durham University
                                        </option>
                                        <option label="Edge Hill University" value="Edge Hill University">Edge Hill
                                            University</option>
                                        <option label="Edinburgh Napier University" value="Edinburgh Napier University">
                                            Edinburgh Napier University</option>
                                        <option label="Falmouth University" value="Falmouth University">Falmouth
                                            University</option>
                                        <option label="Glasgow Caledonian University"
                                            value="Glasgow Caledonian University">Glasgow Caledonian University</option>
                                        <option label="Harper Adams University" value="Harper Adams University">Harper
                                            Adams University</option>
                                        <option label="Hartpury University" value="Hartpury University">Hartpury
                                            University</option>
                                        <option label="Heriot-Watt University" value="Heriot-Watt University">
                                            Heriot-Watt University</option>
                                        <option label="Imperial College London" value="Imperial College London">Imperial
                                            College London</option>
                                        <option label="Keele University" value="Keele University">Keele University
                                        </option>
                                        <option label="Kingston University" value="Kingston University">Kingston
                                            University</option>
                                        <option label="Lancaster University" value="Lancaster University">Lancaster
                                            University</option>
                                        <option label="Leeds Arts University[6]" value="Leeds Arts University[6]">Leeds
                                            Arts University[6]</option>
                                        <option label="Leeds Beckett University" value="Leeds Beckett University">Leeds
                                            Beckett University</option>
                                        <option label="Leeds Trinity University" value="Leeds Trinity University">Leeds
                                            Trinity University</option>
                                        <option label="Liverpool Hope University" value="Liverpool Hope University">
                                            Liverpool Hope University</option>
                                        <option label="Liverpool John Moores University"
                                            value="Liverpool John Moores University">Liverpool John Moores University
                                        </option>
                                        <option label="London Metropolitan University"
                                            value="London Metropolitan University">London Metropolitan University
                                        </option>
                                        <option label="London School of Economics" value="London School of Economics">
                                            London School of Economics</option>
                                        <option label="London South Bank University"
                                            value="London South Bank University">London South Bank University</option>
                                        <option label="Loughborough University" value="Loughborough University">
                                            Loughborough University</option>
                                        <option label="Manchester Metropolitan University"
                                            value="Manchester Metropolitan University">Manchester Metropolitan
                                            University</option>
                                        <option label="Middlesex University" value="Middlesex University">Middlesex
                                            University</option>
                                        <option label="Newcastle University" value="Newcastle University">Newcastle
                                            University</option>
                                        <option label="Northeastern University – London[8]"
                                            value="Northeastern University – London[8]">Northeastern University –
                                            London[8]</option>
                                        <option label="Northumbria University" value="Northumbria University">
                                            Northumbria University</option>
                                        <option label="Norwich University of the Arts"
                                            value="Norwich University of the Arts">Norwich University of the Arts
                                        </option>
                                        <option label="Nottingham Trent University" value="Nottingham Trent University">
                                            Nottingham Trent University</option>
                                        <option label="Oxford Brookes University" value="Oxford Brookes University">
                                            Oxford Brookes University</option>
                                        <option label="Plymouth Marjon University" value="Plymouth Marjon University">
                                            Plymouth Marjon University</option>
                                        <option label="Queen Margaret University" value="Queen Margaret University">
                                            Queen Margaret University</option>
                                        <option label="Queen's University Belfast" value="Queen's University Belfast">
                                            Queen's University Belfast</option>
                                        <option label="Ravensbourne University" value="Ravensbourne University">
                                            Ravensbourne University</option>
                                        <option label="Regent's University London" value="Regent's University London">
                                            Regent's University London</option>
                                        <option label="Richmond American University London"
                                            value="Richmond American University London">Richmond American University
                                            London</option>
                                        <option label="Robert Gordon University" value="Robert Gordon University">Robert
                                            Gordon University</option>
                                        <option label="Roehampton University" value="Roehampton University">Roehampton
                                            University</option>
                                        <option label="Royal Agricultural University"
                                            value="Royal Agricultural University">Royal Agricultural University</option>
                                        <option label="Royal Holloway, University of London[11]"
                                            value="Royal Holloway, University of London[11]">Royal Holloway, University
                                            of London[11]</option>
                                        <option label="Sheffield Hallam University" value="Sheffield Hallam University">
                                            Sheffield Hallam University</option>
                                        <option label="Solent University" value="Solent University">Solent University
                                        </option>
                                        <option label="St George's, University of London[12]"
                                            value="St George's, University of London[12]">St George's, University of
                                            London[12]</option>
                                        <option label="St Mary's University, Twickenham"
                                            value="St Mary's University, Twickenham">St Mary's University, Twickenham
                                        </option>
                                        <option label="Staffordshire University" value="Staffordshire University">
                                            Staffordshire University</option>
                                        <option label="Swansea University" value="Swansea University">Swansea University
                                        </option>
                                        <option label="Teesside University" value="Teesside University">Teesside
                                            University</option>
                                        <option label="The Open University" value="The Open University">The Open
                                            University</option>
                                        <option label="Ulster University" value="Ulster University">Ulster University
                                        </option>
                                        <option label="University College Birmingham"
                                            value="University College Birmingham">University College Birmingham</option>
                                        <option label="University College London" value="University College London">
                                            University College London</option>
                                        <option label="University for the Creative Arts"
                                            value="University for the Creative Arts">University for the Creative Arts
                                        </option>
                                        <option label="University of Aberdeen" value="University of Aberdeen">University
                                            of Aberdeen</option>
                                        <option label="University of Bath" value="University of Bath">University of Bath
                                        </option>
                                        <option label="University of Bedfordshire" value="University of Bedfordshire">
                                            University of Bedfordshire</option>
                                        <option label="University of Birmingham" value="University of Birmingham">
                                            University of Birmingham</option>
                                        <option label="University of Bolton" value="University of Bolton">University of
                                            Bolton</option>
                                        <option label="University of Bradford" value="University of Bradford">University
                                            of Bradford</option>
                                        <option label="University of Brighton" value="University of Brighton">University
                                            of Brighton</option>
                                        <option label="University of Bristol" value="University of Bristol">University
                                            of Bristol</option>
                                        <option label="University of Buckingham" value="University of Buckingham">
                                            University of Buckingham</option>
                                        <option label="University of Cambridge" value="University of Cambridge">
                                            University of Cambridge</option>
                                        <option label="University of Central Lancashire"
                                            value="University of Central Lancashire">University of Central Lancashire
                                        </option>
                                        <option label="University of Chester" value="University of Chester">University
                                            of Chester</option>
                                        <option label="University of Chichester" value="University of Chichester">
                                            University of Chichester</option>
                                        <option label="University of Cumbria" value="University of Cumbria">University
                                            of Cumbria</option>
                                        <option label="University of Derby" value="University of Derby">University of
                                            Derby</option>
                                        <option label="University of Dundee" value="University of Dundee">University of
                                            Dundee</option>
                                        <option label="University of East Anglia" value="University of East Anglia">
                                            University of East Anglia</option>
                                        <option label="University of East London" value="University of East London">
                                            University of East London</option>
                                        <option label="University of Edinburgh" value="University of Edinburgh">
                                            University of Edinburgh</option>
                                        <option label="University of Essex" value="University of Essex">University of
                                            Essex</option>
                                        <option label="University of Exeter" value="University of Exeter">University of
                                            Exeter</option>
                                        <option label="University of Glasgow" value="University of Glasgow">University
                                            of Glasgow</option>
                                        <option label="University of Gloucestershire"
                                            value="University of Gloucestershire">University of Gloucestershire</option>
                                        <option label="University of Greenwich" value="University of Greenwich">
                                            University of Greenwich</option>
                                        <option label="University of Hertfordshire" value="University of Hertfordshire">
                                            University of Hertfordshire</option>
                                        <option label="University of Huddersfield" value="University of Huddersfield">
                                            University of Huddersfield</option>
                                        <option label="University of Hull" value="University of Hull">University of Hull
                                        </option>
                                        <option label="University of Kent" value="University of Kent">University of Kent
                                        </option>
                                        <option label="University of Law" value="University of Law">University of Law
                                        </option>
                                        <option label="University of Leeds" value="University of Leeds">University of
                                            Leeds</option>
                                        <option label="University of Leicester" value="University of Leicester">
                                            University of Leicester</option>
                                        <option label="University of Lincoln" value="University of Lincoln">University
                                            of Lincoln</option>
                                        <option label="University of Liverpool" value="University of Liverpool">
                                            University of Liverpool</option>
                                        <option label="University of London" value="University of London">University of
                                            London</option>
                                        <option label="University of Manchester" value="University of Manchester">
                                            University of Manchester</option>
                                        <option label="University of Northampton" value="University of Northampton">
                                            University of Northampton</option>
                                        <option label="University of Nottingham" value="University of Nottingham">
                                            University of Nottingham</option>
                                        <option label="University of Oxford" value="University of Oxford">University of
                                            Oxford</option>
                                        <option label="University of Plymouth" value="University of Plymouth">University
                                            of Plymouth</option>
                                        <option label="University of Portsmouth" value="University of Portsmouth">
                                            University of Portsmouth</option>
                                        <option label="University of Reading" value="University of Reading">University
                                            of Reading</option>
                                        <option label="University of Salford" value="University of Salford">University
                                            of Salford</option>
                                        <option label="University of Sheffield" value="University of Sheffield">
                                            University of Sheffield</option>
                                        <option label="University of South Wales" value="University of South Wales">
                                            University of South Wales</option>
                                        <option label="University of Southampton" value="University of Southampton">
                                            University of Southampton</option>
                                        <option label="University of St Andrews" value="University of St Andrews">
                                            University of St Andrews</option>
                                        <option label="University of Stirling" value="University of Stirling">University
                                            of Stirling</option>
                                        <option label="University of Strathclyde" value="University of Strathclyde">
                                            University of Strathclyde</option>
                                        <option label="University of Suffolk" value="University of Suffolk">University
                                            of Suffolk</option>
                                        <option label="University of Sunderland" value="University of Sunderland">
                                            University of Sunderland</option>
                                        <option label="University of Surrey" value="University of Surrey">University of
                                            Surrey</option>
                                        <option label="University of Sussex" value="University of Sussex">University of
                                            Sussex</option>
                                        <option label="University of the Arts London"
                                            value="University of the Arts London">University of the Arts London</option>
                                        <option label="University of the Highlands and Islands"
                                            value="University of the Highlands and Islands">University of the Highlands
                                            and Islands</option>
                                        <option label="University of the West of England"
                                            value="University of the West of England">University of the West of England
                                        </option>
                                        <option label="University of the West of Scotland"
                                            value="University of the West of Scotland">University of the West of
                                            Scotland</option>
                                        <option label="University of Wales" value="University of Wales">University of
                                            Wales</option>
                                        <option label="University of Wales Trinity Saint David"
                                            value="University of Wales Trinity Saint David">University of Wales Trinity
                                            Saint David</option>
                                        <option label="University of Warwick" value="University of Warwick">University
                                            of Warwick</option>
                                        <option label="University of West London" value="University of West London">
                                            University of West London</option>
                                        <option label="University of Westminster" value="University of Westminster">
                                            University of Westminster</option>
                                        <option label="University of Winchester" value="University of Winchester">
                                            University of Winchester</option>
                                        <option label="University of Wolverhampton" value="University of Wolverhampton">
                                            University of Wolverhampton</option>
                                        <option label="University of Worcester" value="University of Worcester">
                                            University of Worcester</option>
                                        <option label="University of York" value="University of York">University of York
                                        </option>
                                        <option label="Wrexham University" value="Wrexham University">Wrexham University
                                        </option>
                                        <option label="York St John University" value="York St John University">York St
                                            John University</option>
                                    </select>

									@error('preferred_universities')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 4 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-money"></i></span>
                        <span class="step-text">Documents</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Documents Upload</h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Academic Certificates (High School, Bachelor's, etc.) <span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="file" name="academic_certificates_path" class="form-control @error('academic_certificates_path') is-invalid @enderror">
                                    @error('academic_certificates_path')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Mark Sheets <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" name="mark_sheets_path" class="form-control @error('mark_sheets_path') is-invalid @enderror">
									@error('mark_sheets_path')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        English Language Test Certificate (if available)<span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="file" name="english_test_certificate_path" class="form-control @error('english_test_certificate_path') is-invalid @enderror">
                            		@error('english_test_certificate_path')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
								</div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Updated CV/Resume (for postgraduate applicants)<span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="file" name="cv_resume_path" class="form-control @error('cv_resume_path') is-invalid @enderror">
									@error('cv_resume_path')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="fw-semibold mb-2" style="color:#1D3564; font-size:1.2rem;">
                                        Personal Statement<span class="text-danger">*</span>
                                    </label>
                                    <input type="file" name="personal_statement_path " class="form-control @error('personal_statement_path') is-invalid @enderror">
									@error('personal_statement_path')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Student Reviews Section -->
<x-student-reviews />

<x-student-subscription />
@endsection