<section class="faculty-cards-section py-5 position-relative">
    <!-- Background Image at Bottom -->
    <div class="section-background-bottom position-absolute w-100 bottom-0">
        <img src="{{ asset('frontend/assets/images/vector-graphic 2.png') }}" alt="Background Pattern" class="w-100">
    </div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="text-center mb-4">
            <h2 class="fw-bold" style="font-size: 36px; color: #003054;">
                Popular <span style="color:#DB1F2A;">Faculties</span>
            </h2>
            <p class="text-secondary">Discover diverse academic disciplines and find your perfect study path</p>
        </div>

        <div class="row justify-content-center g-2 owl-carousel owl-theme" id="faculty-carousel">
            <!-- Example Faculty Card -->
            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/business--management.original.png') }}"
                        alt="Business & Management" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Business & Management</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/computer-science--it.original.png') }}"
                        alt="Computing" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Computing</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/engineering--technology.original.png') }}"
                        alt="Engineering" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Engineering</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/law.original.png') }}" alt="Law"
                        style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Law</strong></h5>
                </div>
            </div>
            <!-- Example Faculty Card -->
            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/medicine--health.original.png') }}"
                        alt="Nursing & Midwifery" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Nursing & Midwifery</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/humanities.original.png') }}" alt="Allied Health"
                        style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Allied Health</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/Medicine_and_dentistry.original.png') }}"
                        alt="Medicine & Dentistry" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Medicine & Dentistry</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/Psychology.original.png') }}" alt="Psychology"
                        style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Psychology</strong></h5>
                </div>
            </div>
            <!-- Example Faculty Card -->
            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/applied-sciences--professions.original.png') }}"
                        alt="Medical Science" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Medical Science</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/Architecture.original.png') }}"
                        alt="Architecture" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Architecture</strong></h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-3">
                <div class="faculty-card text-center px-2 py-1 border rounded shadow-sm transition"
                    style="cursor: pointer;">
                    <img src="{{ asset('frontend/assets/images/faculty/explore-all.original.png') }}" alt="Explore ALl"
                        style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="card-content mt-1 mb-0"><strong>Explore All</strong></h5>
                </div>
            </div>

            <!-- Repeat for other cards in the same pattern -->
        </div>
    </div>
</section>

<!-- Hover Effect CSS -->
<style>
.faculty-card {
    transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
}

.faculty-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    border-color: #DB1F2A;
}

/* Image zoom effect on card hover */
.faculty-card img {
    transition: transform 0.3s ease;
}

.faculty-card:hover img {
    transform: scale(1.3);
    /* zoom in 10% */
}
</style>
<style>
/* Faculty Cards Section Styles with Bottom Background */
.faculty-cards-section {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

/* Bottom Background Image */
.section-background-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 220px;
    /* slightly taller for better visibility */
    z-index: 1;
    /* opacity: 0.85;  */
    /* clearer and more visible */
    /* filter: contrast(120%) brightness(105%) saturate(110%); */
}

.background-image-bottom {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: bottom center;
    /* image-rendering: -webkit-optimize-contrast; */
    image-rendering: crisp-edges;
}

.faculty-card {
    background: white;
    border-radius: 15px;
    padding: 30px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    height: 100%;
    min-height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid #f0f0f0;
}

.faculty-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.card-icon {
    margin-bottom: 15px;
    position: relative;
    z-index: 2;
}

.card-icon i {
    font-size: 2.5rem;
    color: #D24147;
    background: rgba(210, 65, 71, 0.1);
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.faculty-card:hover .card-icon i {
    background: #D24147;
    color: white;
    transform: scale(1.1);
}

.card-content {
    position: relative;
    z-index: 2;
}

.card-content h5 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #003054;
    margin-bottom: 8px;
    transition: color 0.3s ease;
}

.faculty-card:hover .card-content h5 {
    color: #D24147;
}

.card-content p {
    font-size: 0.9rem;
    color: #666;
    margin: 0;
    font-weight: 500;
}

.card-background {
    position: absolute;
    bottom: 0;
    right: 0;
    opacity: 0.1;
    transition: all 0.3s ease;
    z-index: 1;
}

.card-background img {
    width: 139px;
    height: 186px;
    object-fit: cover;
    border-radius: 10px 0 15px 0;
}

.faculty-card:hover .card-background {
    opacity: 0.15;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 992px) {
    .faculty-card {
        padding: 25px 15px;
        min-height: 180px;
    }

    .card-icon i {
        font-size: 2.2rem;
        width: 60px;
        height: 60px;
    }

    .card-content h5 {
        font-size: 1.1rem;
    }

    .section-background-bottom {
        height: 120px;
    }
}

@media (max-width: 768px) {
    .faculty-cards-section {
        padding: 60px 0;
    }

    .faculty-card {
        padding: 20px 15px;
        min-height: 160px;
    }

    .card-icon i {
        font-size: 2rem;
        width: 55px;
        height: 55px;
    }

    .card-content h5 {
        font-size: 1rem;
    }

    .card-content p {
        font-size: 0.85rem;
    }

    .card-background img {
        width: 100px;
        height: 140px;
    }

    .section-background-bottom {
        height: 100px;
        opacity: 0.1;
    }
}

@media (max-width: 576px) {
    .faculty-cards-section {
        padding: 50px 0;
    }

    .faculty-card {
        padding: 15px 10px;
        min-height: 140px;
    }

    .card-icon {
        margin-bottom: 10px;
    }

    .card-icon i {
        font-size: 1.8rem;
        width: 50px;
        height: 50px;
    }

    .card-content h5 {
        font-size: 0.95rem;
    }

    .card-content p {
        font-size: 0.8rem;
    }

    .card-background img {
        width: 80px;
        height: 120px;
    }

    .section-background-bottom {
        height: 80px;
        opacity: 0.08;
    }
}
</style>