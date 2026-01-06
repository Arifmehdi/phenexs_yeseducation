<section id="contact" class="py-5 bg-white">
    <div class="container">

        <!-- HEADING -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#1D3564;">Get In <span style="color:#DB1F2A;">Touch</span></h2>
            <p class="text-muted fs-5 mx-auto" style="max-width:700px;">
                Ready to begin your UK education journey? Contact us today for a free consultation
            </p>
        </div>

        <div class="row g-4">

            <!-- FORM CARD -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 bg-light">
                    <div class="card-body p-4">
                        <h4 class="fw-semibold mb-4">Send us a message</h4>

                        <form id="contactForm">
                            <div id="formMessage"></div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Full Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="full_name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Phone <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Country <span class="text-danger">*</span></label>
                                <select class="form-control" name="country" required>
                                    <option selected disabled>Select your country</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Nigeria</option>
                                    <option>Sri Lanka</option>
                                    <option>Nepal</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Message</label>
                                <textarea class="form-control" rows="4" name="message"
                                    placeholder="Tell us about your study goals..."></textarea>
                            </div>

                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="policy">
                                <label class="form-check-label text-muted" for="policy">
                                    I agree to the privacy policy and terms of service
                                </label>
                            </div>

                            <!-- ✔ BUTTON IS HERE -->
                            <button type="submit" id="submitBtn"
                                class="btn w-100 d-flex align-items-center justify-content-center gap-2 fw-semibold text-white"
                                style="background:#3B308B; font-size:14px; position:relative;">
                                <span id="btnText">Send Message</span>
                                <span id="btnSpinner" style="display:none;">
                                    <i class="fas fa-spinner fa-spin"></i> Sending...
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- INFO COLUMN -->
            <div class="col-lg-6">

                <div class="row g-4">

                    <!-- CONTACT INFO -->
                    <div class="col-md-6">
                        <h4 class="fw-semibold mb-4">Contact Information</h4>

                        <!-- PHONE -->
                        <div class="d-flex mb-3 align-items-start">
                            <div class="icon-box  text-white rounded-circle me-3" style="background: #3B308B">
                                <i class="fas fa-phone"></i>
                            </div> &nbsp; &nbsp;
                            <div>
                                <strong>Phone</strong>
                                <p class="mb-0 text-muted">+880 9611 656889,</p>
                                <p class="mb-0 text-muted">+880 1898-828980</p>

                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class="d-flex mb-3 align-items-start">
                            <div class="icon-box  text-white rounded-circle me-3" style="background: #3B308B">
                                <i class="fas fa-envelope"></i>
                            </div> &nbsp; &nbsp;
                            <div>
                                <strong>Email</strong>
                                <p class="mb-0 text-muted">support@yesedu.com</p>
                            </div>
                        </div>

                        <!-- ADDRESS -->
                        <div class="d-flex align-items-start">
                            <div class="icon-box  text-white rounded-circle me-3" style="background: #3B308B">
                                <i class="fas fa-map-marker-alt"></i>
                            </div> &nbsp; &nbsp;
                            <div>
                                <strong>Address</strong>
                                <p class="mb-0 text-muted">Dhaka, Bangladesh</p>
                            </div>
                        </div>
                    </div>

                    <!-- SOCIAL -->
                    <div class="col-md-6">
                        <h4 class="fw-semibold mb-4">Follow Us</h4>

                        <a href="{{ $ws->fb_url }}" class="social-card d-flex align-items-center mb-3" target="_blank">
                            <i class="fab fa-facebook-f fb"></i>
                            <div>
                                <strong>Facebook</strong>
                                <small class="d-block text-muted">Follow us on Facebook</small>
                            </div>
                        </a>

                        <a href="#" class="social-card d-flex align-items-center mb-3" target="_blank">
                            <i class="fab fa-instagram ig"></i>
                            <div>
                                <strong>Instagram</strong>
                                <small class="d-block text-muted">Follow us on Instagram</small>
                            </div>
                        </a>

                        <a href="#" class="social-card d-flex align-items-center mb-3" target="_blank">
                            <i class="fab fa-linkedin-in ln"></i>
                            <div>
                                <strong>LinkedIn</strong>
                                <small class="d-block text-muted">Connect on LinkedIn</small>
                            </div>
                        </a>

                        <a href="#" class="social-card d-flex align-items-center" target="_blank">
                            <img src="{{ asset('frontend/assets/images/icons/tiktok-icon.png') }}" class="me-3"
                                width="40" height="40" alt="TikTok"> &nbsp; &nbsp;
                            <div>
                                <strong>TikTok</strong>
                                <small class="d-block text-muted">Follow us on TikTok</small>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- MAP -->
                <div class="mt-4">
                    <div class="text-center mb-2">
                        <i class="fas fa-map-marker-alt fs-4 text-primary"></i>
                        <p class="fw-semibold mb-0">Our Main Office</p>
                        <small class="text-muted">Road 1, Block-A, Gulshan 1, Dhaka</small>
                    </div>

                    <div class="rounded overflow-hidden" style="height:250px;">
                        <iframe src="https://www.google.com/maps?q=Gulshan+1+Dhaka&output=embed" width="100%"
                            height="100%" style="border:0;" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@push('css')
<style>
    .icon-box {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-label {
        font-weight: 600;
        text-align: left;
        /* ensures label is left-aligned */
        display: block;
        /* ensures it behaves like block above input */
    }


    .social-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 10px;
        text-decoration: none;
        color: inherit;
        transition: .2s;
    }

    .social-card:hover {
        background: #e9ecef;
    }

    .social-card i {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-right: 12px;
    }

    /* Social Colors */
    .fb {
        background: #1877f2;
    }

    .ig {
        background: linear-gradient(45deg, #fd5949, #d6249f, #285AEB);
    }

    .ln {
        background: #0A66C2;
    }

    .tt {
        background: black;
    }

    /* Responsive adjustments */
    @media(max-width:767px) {
        .d-flex.align-items-start {
            flex-direction: row;
        }

        .social-card div {
            font-size: 13px;
        }

        .social-card i {
            width: 36px;
            height: 36px;
            margin-right: 8px;
            font-size: 14px;
        }

        button.btn i {
            font-size: 14px;
        }

        button.btn span {
            font-size: 14px;
        }
    }
</style>
@endpush

@push('js')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        let formData = {
            full_name: document.querySelector("input[name=full_name]").value,
            email: document.querySelector("input[name=email]").value,
            phone: document.querySelector("input[name=phone]").value,
            country: document.querySelector("select[name=country]").value,
            message: document.querySelector("textarea[name=message]").value,
            agree_policy: document.getElementById('policy').checked ? 1 : 0
        };
        let messageDiv = document.getElementById('formMessage');
        fetch("{{ route('contact.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify(formData)
            })
            .then(async res => {
                let data = await res.json();
                if (res.status === 200) {
                    messageDiv.innerHTML = `<span style="color:green;">${data.message}</span>`;
                    document.getElementById('contactForm').reset();
                } else if (res.status === 422) {
                    let errors = Object.values(data.errors).flat().join("<br>");
                    messageDiv.innerHTML = `<span style="color:red;">${errors}</span>`;
                }
            });
    });
</script>
@endpush