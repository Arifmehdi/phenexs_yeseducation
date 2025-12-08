<section class="clients-section" style="padding: 60px 0; background-color: #f9f9f9;">
    <div class="auto-container">

        <!-- Main Title -->
        <div class="sec-title centred" style="margin-bottom: 40px;">
            <h2 style="font-size: 36px; font-weight: 700;">Featured <span style="color:#DB1F2A;">UK Universities </span>
            </h2>
            <p style="color: #555;">Worldwide education institutions we hold partnerships with</p>
            <a href="#" class="btn btn-primary"
                style="color: #ffffff !important; background: linear-gradient(90deg, #171F67, #3B308B); border: none; padding: 12px 30px; border-radius: 10px; text-decoration: none;">
                View All <i class="fas fa-external-link-alt" style="color: #ffffff !important;"></i>
            </a>
        </div>

        <!-- First Slider - London Universities -->
        <div class="slider-container" style="margin-bottom: 20px;">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-1.png') }}" alt="London Uni 1"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-2.png') }}" alt="London Uni 2"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-4.png') }}" alt="London Uni 3"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-5.png') }}" alt="London Uni 4"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-6.png') }}" alt="London Uni 5"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-7.png') }}" alt="London Uni 6"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-8.png') }}" alt="London Uni 7"></a>
                </figure>
            </div>
        </div>

        <!-- Second Slider - Manchester Universities -->
        <div class="slider-container" style="margin-bottom: 20px;">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-9.png') }}" alt="Manchester Uni 1"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-10.png') }}" alt="Manchester Uni 2"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-12.png') }}" alt="Manchester Uni 3"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-13.png') }}" alt="Manchester Uni 4"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-14.png') }}" alt="Manchester Uni 5"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-15.png') }}" alt="Manchester Uni 6"></a>
                </figure>
            </div>
        </div>

        <!-- Third Slider - Birmingham Universities -->
        <div class="slider-container">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-16.png') }}" alt="Birmingham Uni 1"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-18.png') }}" alt="Birmingham Uni 2"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-19.png') }}" alt="Birmingham Uni 3"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-1.png') }}" alt="Birmingham Uni 4"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-2.png') }}" alt="Birmingham Uni 5"></a>
                </figure>
                <figure class="logo-image"><a href="#"><img
                            src="{{ asset('frontend/assets/images/clients/Frame-4.png') }}" alt="Birmingham Uni 6"></a>
                </figure>
            </div>
        </div>

    </div>
</section>

@push('css')
<style>
/* slider brand content  */
.slider-container {
    position: relative;
}

.five-item-carousel {
    position: relative;
}

.logo-image {
    text-align: center;
    padding: 10px;
}

.logo-image img {
    width: 120px;
    height: 80px;
    object-fit: contain;
    transition: all 0.3s ease;
    /* Removed: filter: grayscale(100%); */
    /* Removed: opacity: 0.7; */
}

.logo-image:hover img {
    /* Removed: filter: grayscale(0%); */
    /* Removed: opacity: 1; */
    transform: scale(1.05);
}

/* Owl Carousel Customization */
.owl-carousel .owl-stage {
    display: flex;
    align-items: center;
}

.owl-carousel .owl-item {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .slider-container {
        margin-bottom: 15px !important;
    }

    .logo-image img {
        width: 100px;
        height: 70px;
    }
}

@media (max-width: 576px) {
    .slider-container {
        margin-bottom: 10px !important;
    }

    .logo-image img {
        width: 80px;
        height: 60px;
    }
}
</style>

@endpush


@push('js')
<!-- Initialize Carousel -->
<script>
$(document).ready(function() {
    $('.five-item-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});
</script>
@endpush

