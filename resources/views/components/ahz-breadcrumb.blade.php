@props([
    'title',
    'subtitle' => null,
    // default is a path (not asset() call). We'll resolve it below.
    'image' => null,
    'showButton' => false,
    'buttonText' => 'Book a free consultation',
    'buttonLink' => null,
])

@php
    // Resolve background URL:
    // - If $image looks like a full URL (starts with http or /) use it as-is.
    // - Otherwise treat it as an asset path and run asset($image).
    $bg = $image && preg_match('/^(https?:\/\/|\/\/|\/)/i', $image)
        ? $image
        : asset($image);

@endphp

<!-- Page Hero / Breadcrumb Section -->
<section class="position-relative text-white"
         style="background-image: url('{{ $bg }}'); background-position:center; background-size:cover; height:385px;">

    <!-- Overlay bottom shape -->
    <div class="position-absolute bottom-0 start-0 w-100">
        <img src="{{ asset('frontend/assets/images/Rectangle-2414.png') }}" class="img-fluid w-100" alt="">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50">

        <!-- Breadcrumb -->
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark bg-opacity-75 px-3 py-2 rounded d-inline-flex align-items-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}" class="text-white text-decoration-none">
                            <i class="bi bi-house-fill me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        {{ $title }}
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Center Content -->
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center">

            <h1 class="fw-bold display-6">
                {{ $title }}
            </h1>

            @if($subtitle)
                <p class="text-light mt-2">
                    {{ $subtitle }}
                </p>
            @endif

            <!-- BUTTON (CONDITIONAL) -->
            @if($showButton)
                <a href="{{ $buttonLink ?? '#' }}" class="btn btn-lg mt-3 text-white"
                   style="background: linear-gradient(to right, #00216E, #DB0C28); border-radius: 8px;">
                    {{ $buttonText }}
                </a>
            @endif

        </div>
    </div>
</section>

<style>
@media (max-width: 576px) {
    section h1 {
        font-size: 1.6rem !important;
    }
}
</style>
