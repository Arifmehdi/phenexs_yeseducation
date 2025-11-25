<section class="student-reviews-section" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container-fluid">
        <div class="sec-title centred" style="margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700; color: #003054;">Student <span
                    style="color:#DB1F2A;">Reviews</span></h2>
        </div>

        <div class="student-reviews-slider-container">
            <div class="student-reviews-slider owl-carousel owl-theme">
                <!-- Review 1 -->
                <div class="student-review-slide">
                    <div class="student-review-card">
                        <div class="review-content">
                            <div class="review-message">
                                <p>"YES Education helped me secure admission to my dream university in the UK. Their
                                    guidance was invaluable throughout the entire process."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonial/002.webp') }}"
                                        alt="Student 1" class="student-image">
                                </div>
                            </div>
                            <div class="student-info">
                                <h4 class="student-name">Sarah Johnson</h4>
                                <p class="student-course">Computer Science, University of Manchester</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="student-review-slide">
                    <div class="student-review-card">
                        <div class="review-content">
                            <div class="review-message">
                                <p>"The team at YES Education provided exceptional support with my visa application and
                                    accommodation. I couldn't have done it without them!"</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonial/004.webp') }}"
                                        alt="Student 2" class="student-image">
                                </div>
                            </div>
                            <div class="student-info">
                                <h4 class="student-name">Michael Chen</h4>
                                <p class="student-course">Business Administration, London School of Economics</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="student-review-slide">
                    <div class="student-review-card">
                        <div class="review-content">
                            <div class="review-message">
                                <p>"From course selection to scholarship applications, YES Education guided me at every
                                    step. Highly recommended for international students!"</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonial/004.webp') }}"
                                        alt="Student 3" class="student-image">
                                </div>
                            </div>
                            <div class="student-info">
                                <h4 class="student-name">Priya Sharma</h4>
                                <p class="student-course">Medicine, University of Edinburgh</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="student-review-slide">
                    <div class="student-review-card">
                        <div class="review-content">
                            <div class="review-message">
                                <p>"The personalized attention I received from YES Education made all the difference.
                                    They truly care about their students' success."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonial/003.webp') }}"
                                        alt="Student 4" class="student-image">
                                </div>
                            </div>
                            <div class="student-info">
                                <h4 class="student-name">David Wilson</h4>
                                <p class="student-course">Engineering, Imperial College London</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="student-review-slide">
                    <div class="student-review-card">
                        <div class="review-content">
                            <div class="review-message">
                                <p>"YES Education made my transition to studying in the UK smooth and stress-free. Their
                                    expertise in UK education is unmatched."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonial/002.webp') }}"
                                        alt="Student 5" class="student-image">
                                </div>
                            </div>
                            <div class="student-info">
                                <h4 class="student-name">Emma Rodriguez</h4>
                                <p class="student-course">Law, University of Oxford</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="student-review-slide">
                    <div class="student-review-card">
                        <div class="review-content">
                            <div class="review-message">
                                <p>"I was struggling with my personal statement until YES Education helped me craft a
                                    compelling one that got me multiple offers."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonial/001.webp') }}"
                                        alt="Student 6" class="student-image">
                                </div>
                            </div>
                            <div class="student-info">
                                <h4 class="student-name">Ahmed Hassan</h4>
                                <p class="student-course">Architecture, University College London</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Student Reviews Section Styles */
.student-reviews-section {
    background: #f8f9fa !important;
}

.student-reviews-slider-container {
    position: relative;
    padding: 0 20px;
}

.student-review-slide {
    padding: 10px;
}

.student-review-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    height: 100%;
    display: flex;
    flex-direction: column;
}

.student-review-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
}

.review-content {
    padding: 30px 25px 25px;
    text-align: center;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.review-message {
    margin-bottom: 25px;
    flex-grow: 1;
}

.review-message p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    font-style: italic;
    margin: 0;
}

.student-image-container {
    margin: 15px 0 25px;
    position: relative;
}

.student-image-wrapper {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    position: relative;
    border-radius: 50%;
    padding: 5px;
    background: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.student-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    display: block;
}

/* Half shadow effect on image */
.student-image-wrapper::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
    height: 10px;
    background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0) 70%);
    z-index: -1;
}

.student-info {
    margin-top: 10px;
}

.student-name {
    font-size: 18px;
    font-weight: 700;
    color: #003054;
    margin: 0 0 5px;
}

.student-course {
    font-size: 14px;
    color: #777;
    margin: 0;
}

/* Owl Carousel Customization for Reviews */
.student-reviews-slider .owl-stage {
    display: flex;
    align-items: stretch;
}

.student-reviews-slider .owl-item {
    display: flex;
}

.student-reviews-slider .owl-nav {
    display: none !important;
}

.student-reviews-slider .owl-dots {
    text-align: center;
    margin-top: 30px;
}

.student-reviews-slider .owl-dot span {
    width: 8px;
    height: 8px;
    margin: 5px;
    background: #ddd;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.student-reviews-slider .owl-dot.active span {
    background: #003054;
    transform: scale(1.2);
}

/* Responsive Design for Reviews */
@media (max-width: 1400px) {
    .review-content {
        padding: 25px 20px 20px;
    }
}

@media (max-width: 1200px) {
    .review-message p {
        font-size: 15px;
    }

    .student-name {
        font-size: 17px;
    }
}

@media (max-width: 992px) {
    .student-image-wrapper {
        width: 90px;
        height: 90px;
    }

    .review-message p {
        font-size: 14px;
    }
}

@media (max-width: 768px) {
    .student-reviews-slider-container {
        padding: 0 10px;
    }

    .student-review-slide {
        padding: 5px;
    }

    .review-content {
        padding: 20px 15px 15px;
    }

    .student-image-wrapper {
        width: 80px;
        height: 80px;
    }
}

@media (max-width: 576px) {
    .student-image-wrapper {
        width: 70px;
        height: 70px;
    }

    .student-reviews-slider .owl-dot span {
        width: 6px;
        height: 6px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize student reviews slider
    $('.student-reviews-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    });
});
</script>
