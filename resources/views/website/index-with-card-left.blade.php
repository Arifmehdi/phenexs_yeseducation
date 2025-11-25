@extends('frontend.layouts.master')

@section('title', 'YES Education - Higher Education Consultant')

@section('meta')
<meta name="description"
    content="North Bengal offers premium dairy products, latest news, and world-class services. Explore our departments and services with ease.">
<meta name="keywords" content="North Bengal, dairy products, latest news, services, departments, quality dairy">
<meta property="og:title" content="Home - North Bengal">
<meta property="og:description"
    content="Discover North Bengal’s quality dairy products, latest news, and world-class services.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/home-banner.png') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@push('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Styles -->
<style>
         /* Video Section Styles */
        .video-hero-section {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
            display: flex;
            align-items: center;
            background: #000;
        }

        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .slider-content {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            color: white;
            display: flex;
            align-items: center;
        }

        /* Swiper Container - Left Aligned */
        .swiper-container {
            width: 100%;
            height: auto;
            max-width: 800px;
        }

        .swiper-wrapper {
            height: auto;
        }

        .swiper-slide {
            text-align: left;
            padding: 0;
            height: auto;
        }

        .slide-content {
            max-width: 800px;
            width: 100%;
            padding-right: 20px;
        }

        /* Title Styling */
        .slide-content h2 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .highlight-text {
            color: #D24147;
        }

        /* Strong Subtitle Styling */
        .subtitle-container {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .accent-line {
            width: 4px;
            height: 40px;
            background-color: #D24147;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .subtitle-text {
            font-size: 1.3rem;
            font-weight: 700;
            line-height: 1.4;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Stats Row Styling */
        .stats-row {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
            gap: 1.5rem;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex: 1;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #D24147;
            margin-bottom: 0.5rem;
            transition: transform 0.3s ease;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .stat-number:hover {
            transform: scale(1.1);
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Button Styling */
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 1.5rem;
        }

        .apply-now-btn {
            background-color: #D24147;
            color: #fff;
            padding: 14px 32px;
            border-radius: 8px;
            text-align: center;
            font-weight: 700;
            display: inline-block;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .apply-now-btn:hover {
            background-color: #b53035;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .secondary-btn {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 12px 30px;
        }

        .secondary-btn:hover {
            background-color: white;
            color: #003054;
        }

        /* Swiper Pagination */
        .swiper-pagination {
            position: relative !important;
            bottom: auto !important;
            margin-top: 30px;
            text-align: left;
        }

        .swiper-pagination-bullet {
            background: white;
            opacity: 0.7;
            width: 12px;
            height: 12px;
            margin: 0 8px !important;
        }

        .swiper-pagination-bullet-active {
            background: #D24147;
            opacity: 1;
        }

        /* Ensure proper Swiper fade effect */
        .swiper-fade .swiper-slide {
            opacity: 0 !important;
            transition: opacity 0.5s ease-in-out;
        }

        .swiper-fade .swiper-slide-active {
            opacity: 1 !important;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .slide-content h2 {
                font-size: 2.5rem;
            }
            
            .stats-row {
                flex-wrap: wrap;
            }
            
            .stat-item {
                flex: 0 0 calc(50% - 1rem);
            }
        }

        @media (max-width: 768px) {
            .video-hero-section {
                height: 500px;
            }
            
            .slide-content h2 {
                font-size: 2rem;
                line-height: 1.3;
            }
            
            .subtitle-text {
                font-size: 1.1rem;
            }
            
            .stats-row {
                flex-direction: column;
                gap: 1rem;
            }
            
            .stat-item {
                flex: 1;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .swiper-pagination {
                margin-top: 20px;
            }
            
            .swiper-pagination-bullet {
                width: 8px;
                height: 8px;
                margin: 0 6px !important;
            }
            
            .slider-content {
                padding: 0 15px;
            }
        }

        @media (max-width: 480px) {
            .video-hero-section {
                height: 450px;
            }
            
            .slide-content h2 {
                font-size: 1.8rem;
            }
            
            .accent-line {
                height: 30px;
            }
            
            .stat-number {
                font-size: 1.8rem;
            }
        }
</style>
<style>
.modern-guide-card {
    background: white;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    /* Initial border setup */
    border-left: 3px solid #D24147;
    border-right: 3px solid #D24147;
    border-bottom: 3px solid #D24147;
    border-top: 1px solid #e9ecef;
}

.modern-guide-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    /* Enhanced border on hover */
    border-left: 3px solid #D24147;
    border-right: 3px solid #D24147;
    border-bottom: 3px solid #D24147;
    border-top: 1px solid #e9ecef;
    /* Add glow effect */
    box-shadow: 0 25px 50px rgba(210, 65, 71, 0.2);
}

/* Alternative: Gradient border effect */
.modern-guide-card::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #D24147, #003054, #D24147);
    border-radius: 18px;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.modern-guide-card:hover::before {
    opacity: 1;
}

.guide-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 2;
}

.guide-badge span {
    background: #D24147;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.modern-guide-card:hover .guide-badge span {
    transform: scale(1.05);
    background: #b53035;
}

.modern-guide-card h3 {
    font-size: 32px;
    font-weight: 700;
    color: #003054;
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.modern-guide-card:hover h3 {
    color: #D24147;
}

.modern-guide-card p {
    font-size: 18px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 25px;
    transition: color 0.3s ease;
}

.modern-guide-card:hover p {
    color: #555;
}

.guide-features {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.feature-tag {
    background: rgba(210, 65, 71, 0.1);
    color: #D24147;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.modern-guide-card:hover .feature-tag {
    background: rgba(210, 65, 71, 0.15);
    border: 1px solid rgba(210, 65, 71, 0.3);
    transform: translateY(-2px);
}

.download-section {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.modern-guide-card:hover .download-section {
    background: white;
    border: 2px solid #e9ecef;
    transform: scale(1.02);
}

.file-icon {
    font-size: 48px;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.modern-guide-card:hover .file-icon {
    transform: scale(1.1) rotate(5deg);
}

.download-btn {
    display: inline-flex;
    align-items: center;
    background: #D24147;
    color: white;
    padding: 14px 28px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    margin-bottom: 10px;
    border: 2px solid transparent;
}

.download-btn:hover {
    background: #b53035;
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    border: 2px solid #D24147;
}

.download-btn i {
    margin-left: 8px;
    transition: transform 0.3s ease;
}

.download-btn:hover i {
    transform: translateX(3px);
}

.file-specs {
    font-size: 14px;
    color: #666;
    margin: 0;
    transition: color 0.3s ease;
}

.modern-guide-card:hover .file-specs {
    color: #D24147;
}

/* Add a subtle pulse animation on hover */
@keyframes cardPulse {
    0% { transform: translateY(-8px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(-8px); }
}

.modern-guide-card:hover {
    animation: cardPulse 2s ease-in-out infinite;
}

/* Alternative Design with More Pronounced Borders */
.modern-guide-card.alternative {
    border: none;
    position: relative;
}

.modern-guide-card.alternative::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #D24147, #003054, #D24147);
    border-radius: 0 0 16px 16px;
    transition: height 0.3s ease;
}

.modern-guide-card.alternative:hover::after {
    height: 6px;
}

.modern-guide-card.alternative::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 2px solid transparent;
    border-radius: 16px;
    background: linear-gradient(45deg, #D24147, #003054) border-box;
    -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: destination-out;
    mask-composite: exclude;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.modern-guide-card.alternative:hover::before {
    opacity: 1;
}

@media (max-width: 991px) {
    .modern-guide-card {
        padding: 30px;
    }
    
    .modern-guide-card h3 {
        font-size: 26px;
    }
    
    .guide-badge {
        position: relative;
        top: auto;
        right: auto;
        margin-bottom: 20px;
        display: inline-block;
    }
}

@media (max-width: 767px) {
    .modern-guide-card {
        padding: 25px 20px;
    }
    
    .modern-guide-card h3 {
        font-size: 22px;
    }
    
    .guide-features {
        justify-content: center;
    }
    
    .modern-guide-card:hover {
        transform: translateY(-4px);
    }
}


</style>
<style>
    /* Ultra Compact Content-based Container */
    .box-container {
        max-width: 700px; /* Adjusted for slimmer appearance */
        margin: 60px auto;
    }

    /* Tab Section Styles - Ultra compact */
    .tab-section {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: 1px solid #e9ecef;
        width: 100%; /* Allow full width within its container */
    }
    .tab-section:hover {
        box-shadow: 0 12px 45px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
    }

    .tab-header {
        display: flex;
        background: #f9fafc;
        border-bottom: 1px solid #e9ecef;
        overflow-x: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
        width: 100%;
    }

    .tab-header::-webkit-scrollbar {
        display: none;
    }

    .tab-button {
        flex: 1;
        padding: 16px 20px;
        background: transparent;
        border: none;
        font-size: 15px;
        font-weight: 600;
        color: #666;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 120px;
    }

    .tab-button i {
        margin-right: 8px;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .tab-button:hover {
        color: #D24147;
        background: rgba(210, 65, 71, 0.05);
    }

    .tab-button:hover i {
        color: #D24147;
    }

    .tab-button.active {
        color: #D24147;
        background: #fff;
        font-weight: 700;
    }

    .tab-button.active i {
        color: #D24147;
    }

    .tab-button.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 20%;
        right: 20%;
        height: 3px;
        border-radius: 3px 3px 0 0;
        background: #D24147;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from { transform: scaleX(0); }
        to { transform: scaleX(1); }
    }

    .tab-content {
        padding: 25px;
    }


    .tab-pane {
        display: none;
        animation: fadeInUp 0.4s ease;
    }

    .tab-pane.active {
        display: block;
    }

    @keyframes fadeInUp {
        from { 
            opacity: 0; 
            transform: translateY(10px); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0); 
        }
    }

    .search-form {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .form-group {
        flex: 1;
        min-width: 0; /* Allow form groups to shrink */
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: #fff;
        box-sizing: border-box;
    }

    .form-control:focus {
        outline: none;
        border-color: #D24147;
        box-shadow: 0 0 0 3px rgba(210, 65, 71, 0.15);
    }

    .search-btn {
        background: #D24147;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
        height: 44px;
        white-space: nowrap;
        flex-shrink: 0; /* Prevent button from shrinking */
    }

    .search-btn:hover {
        background: #b53035;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(210, 65, 71, 0.3);
    }

    .events-form {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 15px;
        width: 100%;
    }

    .advice-form {
        text-align: center;
        padding: 20px 0;
        width: 100%;
    }

    .advice-form p {
        margin-bottom: 20px;
        color: #666;
        font-size: 16px;
    }

    .advice-btn {
        background: #003054;
        color: white;
        border: none;
        padding: 14px 32px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .advice-btn:hover {
        background: #002340;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 48, 84, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .tab-section {
            min-width: unset;
            width: 100%;
        }

        .box-container {
            width: 100%;
            max-width: 100%;
        }
        
        .tab-header {
            flex-wrap: nowrap;
            justify-content: flex-start;
        }
        
        .tab-button {
            flex: 0 0 auto;
            min-width: 140px;
            padding: 14px 16px;
            font-size: 14px;
        }
        
        .tab-button i {
            margin-right: 6px;
            font-size: 14px;
        }
        
        .tab-content {
            padding: 25px 20px;
        }
        
        .search-form {
            flex-direction: column;
            gap: 15px;
        }
        
        .events-form {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .search-btn, .advice-btn {
            width: 100%;
            justify-content: center;
        }
        
        .form-group {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .box-container {
            max-width: 95%;
            margin: 30px auto;
            padding: 0 10px;
        }
        
        .tab-button {
            min-width: 120px;
            padding: 12px 14px;
            font-size: 13px;
        }
        
        .tab-button i {
            margin-right: 4px;
            font-size: 13px;
        }
        
        .tab-content {
            padding: 20px 15px;
        }
        
        .form-control {
            padding: 10px 14px;
        }
    }

    /* For very small screens */
    @media (max-width: 360px) {
        .box-container {
            max-width: 100%;
            margin: 20px auto;
            padding: 0 10px;
        }
        
        .tab-button {
            min-width: 110px;
            padding: 10px 12px;
            font-size: 12px;
        }
        
        .tab-content {
            padding: 15px 12px;
        }
    }
</style>
<style>
    /* Centered Container */
    .box-container {
        display: flex;
        justify-content: center;
        margin: 60px auto;
        padding: 0 20px;
        width: 100%;
    }

    /* Tab Section Styles - Proper form layout */
    .tab-section {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        width: 100%;
        max-width: 600px; /* Optimal width for forms */
    }

    .tab-section:hover {
        box-shadow: 0 12px 45px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
    }

    .tab-header {
        display: flex;
        background: #f9fafc;
        border-bottom: 1px solid #e9ecef;
        overflow-x: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
        width: 100%;
    }

    .tab-header::-webkit-scrollbar {
        display: none;
    }

    .tab-button {
        flex: 1;
        padding: 16px 20px;
        background: transparent;
        border: none;
        font-size: 15px;
        font-weight: 600;
        color: #666;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 120px;
    }

    .tab-button i {
        margin-right: 8px;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .tab-button:hover {
        color: #D24147;
        background: rgba(210, 65, 71, 0.05);
    }

    .tab-button:hover i {
        color: #D24147;
    }

    .tab-button.active {
        color: #D24147;
        background: #fff;
        font-weight: 700;
    }

    .tab-button.active i {
        color: #D24147;
    }

    .tab-button.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 20%;
        right: 20%;
        height: 3px;
        border-radius: 3px 3px 0 0;
        background: #D24147;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from { transform: scaleX(0); }
        to { transform: scaleX(1); }
    }

    .tab-content {
        padding: 30px;
        background: #fff;
        width: 100%;
    }

    .tab-pane {
        display: none;
        animation: fadeInUp 0.4s ease;
    }

    .tab-pane.active {
        display: block;
    }

    @keyframes fadeInUp {
        from { 
            opacity: 0; 
            transform: translateY(10px); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0); 
        }
    }

    /* Form styles - Fixed layout */
    .search-form {
        display: flex;
        gap: 15px;
        align-items: flex-end;
        width: 100%;
    }

    .form-group {
        flex: 1;
        min-width: 0;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
        font-size: 14px;
        white-space: nowrap;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: #fff;
        box-sizing: border-box;
        min-width: 0; /* Allow input to shrink */
    }

    .form-control:focus {
        outline: none;
        border-color: #D24147;
        box-shadow: 0 0 0 3px rgba(210, 65, 71, 0.15);
    }

    .search-btn {
        background: #D24147;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
        height: 44px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .search-btn:hover {
        background: #b53035;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(210, 65, 71, 0.3);
    }

    /* Events form - side by side layout */
    .events-form {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        width: 100%;
    }

    .events-form .form-group {
        flex: 1;
    }

    .advice-form {
        text-align: center;
        padding: 10px 0;
        width: 100%;
    }

    .advice-form p {
        margin-bottom: 20px;
        color: #666;
        font-size: 16px;
        line-height: 1.5;
    }

    .advice-btn {
        background: #003054;
        color: white;
        border: none;
        padding: 14px 30px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .advice-btn:hover {
        background: #002340;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 48, 84, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .box-container {
            margin: 40px auto;
            padding: 0 15px;
        }
        
        .tab-section {
            max-width: 100%;
        }
        
        .tab-header {
            flex-wrap: nowrap;
            justify-content: flex-start;
        }
        
        .tab-button {
            flex: 0 0 auto;
            min-width: 140px;
            padding: 14px 16px;
            font-size: 14px;
        }
        
        .tab-button i {
            margin-right: 6px;
            font-size: 14px;
        }
        
        .tab-content {
            padding: 25px 20px;
        }
        
        .search-form {
            flex-direction: column;
            gap: 15px;
        }
        
        .search-btn {
            width: 100%;
            justify-content: center;
        }
        
        .events-form {
            flex-direction: column;
            gap: 15px;
        }
        
        .advice-btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .box-container {
            margin: 30px auto;
            padding: 0 10px;
        }
        
        .tab-button {
            min-width: 120px;
            padding: 12px 14px;
            font-size: 13px;
        }
        
        .tab-button i {
            margin-right: 4px;
            font-size: 13px;
        }
        
        .tab-content {
            padding: 20px 15px;
        }
        
        .form-control {
            padding: 10px 14px;
        }
        
        .search-btn, .advice-btn {
            padding: 12px 20px;
        }
    }
</style>
<style>
    /* Full Width Section Styles */
    .full-width-section-container {
        width: 100%;
        background: linear-gradient(135deg, #003054 0%, #2E2483 100%);
        padding: 80px 0;
        margin: 60px 0;
    }

    .full-width-section {
        width: 100%;
        position: relative;
    }

    .full-width-section .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .full-width-section .row {
        align-items: center;
        min-height: 400px;
    }

    /* Text Content Area */
    .text-content-area {
        color: white;
        padding: 40px 30px 40px 0;
    }

    .text-content-area h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.3;
        color: white;
    }

    .text-content-area p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 0;
    }

    /* Cards Area */
    .cards-overlap-area {
        position: relative;
        padding: 40px 0;
    }

    .cards-overlap-area .row {
        position: relative;
    }

    .card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid #D24147; 
        /* Changed border to a vibrant color */
        transition: all 0.3s ease;
        height: 100%;
        min-height: 120px;
        display: flex;
        align-items: center;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .card-body {
        padding: 25px 20px;
        text-align: center;
        width: 100%;
    }

    .card-body i {
        font-size: 2.5rem;
        color: #D24147;
        margin-bottom: 15px;
        display: block;
    }

    .card-body h5 {
        font-size: 1.1rem;
        font-weight: 600;
        color: #003054;
        margin: 0;
        line-height: 1.4;
    }

    /* Overlapping Cards */
    .overlapping-card-1 {
        position: relative;
        z-index: 3;
        transform: translateY(-20px);
    }

    .overlapping-card-2 {
        position: relative;
        z-index: 2;
        transform: translateY(-10px);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .full-width-section-container {
            padding: 60px 0;
        }

        .text-content-area {
            padding: 0 0 40px 0;
            text-align: center;
        }

        .text-content-area h3 {
            font-size: 2rem;
        }

        .cards-overlap-area {
            padding: 20px 0;
        }

        .overlapping-card-1,
        .overlapping-card-2 {
            transform: none;
        }
    }

    @media (max-width: 768px) {
        .full-width-section-container {
            padding: 50px 0;
            margin: 40px 0;
        }

        .text-content-area h3 {
            font-size: 1.8rem;
        }

        .text-content-area p {
            font-size: 1rem;
        }

        .card {
            min-height: 100px;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px 15px;
        }

        .card-body i {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .card-body h5 {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .full-width-section-container {
            padding: 40px 0;
        }

        .text-content-area h3 {
            font-size: 1.6rem;
        }

        .card-body {
            padding: 15px 10px;
        }

        .card-body i {
            font-size: 1.8rem;
        }

        .card-body h5 {
            font-size: 0.9rem;
        }
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
    height: 220px; /* slightly taller for better visibility */
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


<style>
    /* Scoped styles - won't affect other elements */
    .students-videos-section {
        background: transparent !important;
    }

    .student-videos-slider-container {
        position: relative;
        padding: 0 20px;
    }

    .student-video-slide {
        padding: 10px;
    }

    .student-video-card {
        background: white;
        border-radius: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 1px solid #e0e0e0;
        /* No box-shadow */
    }

    .student-video-card:hover {
        transform: translateY(-3px);
        /* No box-shadow on hover */
    }

    .student-video-thumbnail {
        position: relative;
        width: 100%;
        overflow: hidden;
        cursor: pointer;
    }

    .student-thumbnail-image {
        width: 100%;
        height: 320px; /* Increased height for larger display */
        object-fit: contain; /* Show original image without cropping */
        display: block;
        transition: all 0.3s ease;
        border-radius: 0;
        background: #f8f9fa;
        filter: none; /* Ensure no filters applied to image */
    }

    .student-video-thumbnail:hover .student-thumbnail-image {
        transform: scale(1.03);
    }

    .student-play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px; /* Larger play button */
        height: 60px;
        background: rgba(0, 48, 84, 0.85); /* Semi-transparent blue */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        transition: all 0.3s ease;
        z-index: 3;
        /* No box-shadow */
    }

    .student-play-button:hover {
        background: rgba(0, 48, 84, 0.95);
        transform: translate(-50%, -50%) scale(1.1);
    }

    .student-play-button i {
        margin-left: 4px; /* Better centering of play icon */
    }

    /* Remove overlay to show original image colors */
    .student-video-overlay {
        display: none;
    }

    /* Owl Carousel Customization */
    .student-videos-slider .owl-stage {
        display: flex;
        align-items: stretch;
    }

    .student-videos-slider .owl-item {
        display: flex;
    }

    /* Hide navigation arrows */
    .student-videos-slider .owl-nav {
        display: none !important;
    }

    .student-videos-slider .owl-dots {
        text-align: center;
        margin-top: 30px;
    }

    .student-videos-slider .owl-dot span {
        width: 8px;
        height: 8px;
        margin: 5px;
        background: #ddd;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .student-videos-slider .owl-dot.active span {
        background: #003054;
        transform: scale(1.2);
    }

    /* Scoped modal styles */
    .student-video-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 9999;
        align-items: center;
        justify-content: center;
    }

    .student-video-modal.active {
        display: flex;
    }

    .student-modal-content {
        position: relative;
        width: 90%;
        max-width: 900px; /* Slightly larger modal */
    }

    .student-modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: white;
        font-size: 30px;
        cursor: pointer;
        background: none;
        border: none;
        z-index: 10000;
    }

    .student-modal-video-container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
    }

    .student-modal-video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 0;
    }

    /* Responsive Design */
    @media (max-width: 1400px) {
        .student-thumbnail-image {
            height: 290px;
        }
    }

    @media (max-width: 1200px) {
        .student-thumbnail-image {
            height: 260px;
        }
    }

    @media (max-width: 992px) {
        .student-thumbnail-image {
            height: 230px;
        }
        
        .student-play-button {
            width: 50px;
            height: 50px;
            font-size: 16px;
        }
    }

    @media (max-width: 768px) {
        .student-thumbnail-image {
            height: 200px;
        }

        .student-play-button {
            width: 45px;
            height: 45px;
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .student-thumbnail-image {
            height: 180px;
        }

        .student-play-button {
            width: 40px;
            height: 40px;
            font-size: 12px;
        }
        
        .student-videos-slider .owl-dot span {
            width: 6px;
            height: 6px;
        }
    }
</style>


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
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0) 70%);
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

<style>

    /* Prevent uneven image/text shrinking */
.journey-step-card-single img.step-img-single {
    width: 100%;
    height: 250px;
    object-fit: cover;
}
/* Full Width Slim Style */
.journey-step-slide-single {
    width: 100% !important; /* ensures consistent slide width */
    max-width: 1100px; /* set this to your first step’s total width */
    margin: 0 auto;
}

/* Ensure internal layout alignment is consistent */
.journey-step-card-single .row {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
}

.journey-roadmap-slider-single-container {
    max-width: 100%;
    padding: 0 60px;
    position: relative;
}
.journey-step-card-single {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}
.step-img-single {
    width: 100%;
    height: 250px;
    object-fit: cover;
}
/* Optional: equalize padding for content */
.step-content-single {
    padding: 30px 25px;
    min-height: 250px; /* keeps text area height consistent */
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.step-number-single span {
    width: 45px;
    height: 45px;
    background: #003054;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 10px;
}
.step-title-single {
    font-size: 20px;
    font-weight: 600;
    color: #003054;
    margin-bottom: 10px;
}
.step-description-single {
    font-size: 15px;
    color: #555;
    line-height: 1.5;
}

/* Navigation */
.custom-nav-single {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    pointer-events: none;
}
.custom-prev-single,
.custom-next-single {
    width: 45px;
    height: 45px;
    background: #003054;
    color: #fff;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    pointer-events: all;
}
.custom-prev-single:hover,
.custom-next-single:hover {
    background: #002340;
    transform: scale(1.1);
}

/* Hide Owl Dots */
.journey-roadmap-slider-single .owl-nav,
.journey-roadmap-slider-single .owl-dots {
    display: none !important;
}

/* Responsive */
@media (max-width: 768px) {
    .journey-roadmap-slider-single-container {
        padding: 0 20px;
    }
    .step-img-single {
        height: 200px;
    }
    .step-title-single {
        font-size: 18px;
    }
}
</style>
@endpush

@section('content')
<!-- Swiper CSS -->


@section('content')
<!-- Remove duplicate Swiper CSS link and duplicate @section('content') -->
    <section class="video-hero-section">
        <!-- Background Video -->
        <video class="background-video" autoplay loop muted preload="auto" playsinline>
            <source src="https://mie-global-te43fd.s3.amazonaws.com/static/documents/video-2_online-video-cutter.com.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <!-- Dark Overlay -->
        <div class="video-overlay"></div>
        
        <!-- Slider Content -->
        <div class="slider-content">
            <div class="swiper mySwiper swiper-fade">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <h2>
                                Applications are open <br>for January - <span class="highlight-text">2026</span> intake
                            </h2>
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    100% Free Counselling & Application Processing
                                </p>
                            </div>
                            <a href="/application" class="apply-now-btn">Apply Now</a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <h2>
                                Comprehensive <span class="highlight-text">Admissions</span><br>Support
                            </h2>
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    From Education to Career - We Support You All The Way
                                </p>
                            </div>
                            <a href="/application" class="apply-now-btn">Apply Now</a>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <h2>
                                <span class="highlight-text">UK</span> University<br>Partnerships
                            </h2>
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    Partnering With Universities Worldwide For Your Success
                                </p>
                            </div>
                            <div class="btn-group">
                                <a href="/application" class="apply-now-btn">Apply Now</a>
                                <a href="/universities" class="apply-now-btn secondary-btn">View all Universities</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    100% Free Counselling & Application Processing
                                </p>
                            </div>
                            <h2>
                                One of the largest <span class="highlight-text">UK</span><br>University representatives
                            </h2>
                            
                            <div class="stats-row">
                                <div class="stat-item">
                                    <span class="stat-number">20,000+</span>
                                    <span class="stat-label">Student's Career</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">35+</span>
                                    <span class="stat-label">Recruitment Awards</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">140+</span>
                                    <span class="stat-label">University Partners</span>
                                </div>
                            </div>
                            
                            <a href="/application" class="apply-now-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Swiper Pagination - Now appears below the content -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>




    <!-- Modern Alternative Design -->
    <section class="feature-style-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 feature-block">
                        <div class="modern-guide-card alternative">
                            <div class="card-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-8 col-md-7">
                                        <h3>Your Ultimate Guide to Study in the UK</h3>
                                        <p>Get comprehensive insights, tips, and everything you need to know about pursuing your education in the United Kingdom.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-5 text-center">
                                        <div class="download-section">
                                            <a href="#" class="download-btn">
                                                Download Free Guide
                                                <i class="fas fa-download"></i>
                                            </a>
                                            <p class="file-specs">PDF Format • Instant Access</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Tab Section -->
<div class="box-container">
    <section class="tab-section">
        <div class="tab-header">
            <button class="tab-button active" data-tab="location">
                <i class="fas fa-map-marker-alt"></i> Location
            </button>
            <button class="tab-button" data-tab="university">
                <i class="fas fa-university"></i> University
            </button>
            <button class="tab-button" data-tab="courses">
                <i class="fas fa-book"></i> Courses
            </button>
            <button class="tab-button" data-tab="events">
                <i class="fas fa-calendar-alt"></i> Events
            </button>
            <button class="tab-button" data-tab="advice">
                <i class="fas fa-comments"></i> Get Advice
            </button>
        </div>

        <div class="tab-content">
            <!-- Location Tab -->
            <div class="tab-pane active" id="location">
                <form class="search-form">
                    <div class="form-group">
                        <label for="location-search">Search by Location</label>
                        <input type="text" id="location-search" class="form-control" placeholder="Enter city or country...">
                    </div>
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i> Search
                    </button>
                </form>
            </div>

            <!-- University Tab -->
            <div class="tab-pane" id="university">
                <form class="search-form">
                    <div class="form-group">
                        <label for="university-search">Search Universities</label>
                        <input type="text" id="university-search" class="form-control" placeholder="Enter university name...">
                    </div>
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i> Search
                    </button>
                </form>
            </div>

            <!-- Courses Tab -->
            <div class="tab-pane" id="courses">
                <form class="search-form">
                    <div class="form-group">
                        <label for="course-search">Search Courses</label>
                        <input type="text" id="course-search" class="form-control" placeholder="Enter course name...">
                    </div>
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i> Search
                    </button>
                </form>
            </div>

            <!-- Events Tab -->
            <div class="tab-pane" id="events">
                <form class="search-form">
                    <div class="events-form">
                        <div class="form-group">
                            <label for="event-type">Event Type</label>
                            <select id="event-type" class="form-control">
                                <option value="">Select event type</option>
                                <option value="webinar">Webinar</option>
                                <option value="fair">Education Fair</option>
                                <option value="seminar">Seminar</option>
                                <option value="workshop">Workshop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="event-date">Event Date</label>
                            <select id="event-date" class="form-control">
                                <option value="">Select date range</option>
                                <option value="this-week">This Week</option>
                                <option value="this-month">This Month</option>
                                <option value="next-month">Next Month</option>
                                <option value="next-3-months">Next 3 Months</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i> Find Events
                    </button>
                </form>
            </div>

            <!-- Get Advice Tab -->
            <div class="tab-pane" id="advice">
                <div class="advice-form">
                    <p>Get personalized advice from our education experts</p>
                    <button class="advice-btn">
                        <i class="fas fa-user-graduate"></i> Book Free Consultation
                    </button>
                </div>
            </div>
        </div>
    </div>
    </section>

    <div class="full-width-section-container">
        <section class="full-width-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-content-area">
                        <h3>Want to study in the UK? Get ahead with YES Education!</h3>
                        <p>Welcome to YES Education! If you dream of studying in the UK, we’re here to help you find the right course, the right university, and the right funding options. Try our handy search tool, find out everything you need to know if you want to study in the UK, and learn all about the UK’s best education consultants.</p>
                    </div>
                    <div class="col-md-6 cards-overlap-area">
                        <div class="row">
                            <div class="col-md-6 mb-3 overlapping-card-1">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h5>Located in 15+ Countries</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 overlapping-card-2">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-cogs"></i>
                                        <h5>End to End Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-university"></i>
                                        <h5>140+ Partner Institutions</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-user-tie"></i>
                                        <h5>500+ British Council Trained Counsellors</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



<!-- about-style-two -->
<section class="about-style-two">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_3">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>who are YES Education</p>
                            <h2>The Leading Visa & Immigration Expert Lawyers Since 2000</h2>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="text">
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vsr tatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur magnid.</p>
                        </div>
                        <div class="btn-box"><a href="index-2.html" class="theme-btn-two">Learn More<i
                                    class="flaticon-send"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_2">
                    <div class="image-box">
                        <figure class="image-1"><img src="{{ asset('frontend/assets/images/resource/about-2.jpg') }}"
                                alt=""></figure>
                        <figure class="image-2"><img src="{{ asset('frontend/assets/images/resource/about-3.jpg') }}"
                                alt=""></figure>
                        <figure class="image-3"><img src="{{ asset('frontend/assets/images/resource/about-4.jpg') }}"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->


<!-- cta ads section start -->
<section class="cta-section centred" style="width: 100%; overflow: hidden; margin-top: 80px;">
    <img src="{{ asset('frontend/assets/images/ads/January_Intake_in_the_UK_-_Desktop_Image.original.webp') }}"
        alt="January Intake Banner" style="width: 100%; height: auto; display: block;">
</section>
<!-- cta ads section end -->

<!-- Faculty Cards Section -->
<section class="faculty-cards-section" style="padding: 80px 0; position: relative;">
    <!-- Background Image at Bottom -->
    <div class="section-background-bottom">
        <img src="{{ asset('frontend/assets/images/vector-graphic 2.png') }}" alt="Background Pattern" class="background-image-bottom">
    </div>
    
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 50px; position: relative; z-index: 2;">
            <h2 style="font-size: 36px; font-weight: 700; color: #003054;">Explore Popular Faculties</h2>
            <p style="color: #555;">Discover diverse academic disciplines and find your perfect study path</p>
        </div>

        <div class="row justify-content-center" style="position: relative; z-index: 2;">
            <!-- Faculty Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="card-content">
                        <h5>Computer Science</h5>
                        <p>Technology & IT</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/computer-science.jpg') }}" alt="Computer Science" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>

            <!-- Faculty Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>
                    <div class="card-content">
                        <h5>Medicine</h5>
                        <p>Health Sciences</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/medicine.jpg') }}" alt="Medicine" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>

            <!-- Faculty Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="card-content">
                        <h5>Law</h5>
                        <p>Legal Studies</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/law.jpg') }}" alt="Law" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>

            <!-- Faculty Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="card-content">
                        <h5>Business</h5>
                        <p>Management Studies</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/business.jpg') }}" alt="Business" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>

            <!-- Faculty Card 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="card-content">
                        <h5>Engineering</h5>
                        <p>Technical Sciences</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/engineering.jpg') }}" alt="Engineering" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>

            <!-- Faculty Card 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <div class="card-content">
                        <h5>Arts & Design</h5>
                        <p>Creative Arts</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/arts-design.jpg') }}" alt="Arts & Design" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>

            <!-- Faculty Card 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="card-content">
                        <h5>Education</h5>
                        <p>Teaching & Learning</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/education.jpg') }}" alt="Education" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>

            <!-- Faculty Card 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="faculty-card">
                    <div class="card-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="card-content">
                        <h5>Psychology</h5>
                        <p>Human Behavior</p>
                    </div>
                    <div class="card-background">
                        <img src="{{ asset('frontend/assets/images/faculty/psychology.jpg') }}" alt="Psychology" style="width: 139px; height: 186px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Three Stacked Carousels Section -->
<section class="clients-section" style="padding: 60px 0; background-color: #f9f9f9;">
    <div class="auto-container">
        
        <!-- Main Title -->
        <div class="sec-title centred" style="margin-bottom: 40px;">
            <h2 style="font-size: 36px; font-weight: 700;">Featured UK Universities</h2>
            <p style="color: #555;">Worldwide education institutions we hold partnerships with</p>
        </div>

        <!-- First Slider - London Universities -->
        <div class="slider-container" style="margin-bottom: 20px;">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-1.png') }}" alt="London Uni 1"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-2.png') }}" alt="London Uni 2"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-4.png') }}" alt="London Uni 3"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-5.png') }}" alt="London Uni 4"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-6.png') }}" alt="London Uni 5"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-7.png') }}" alt="London Uni 6"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-8.png') }}" alt="London Uni 7"></a></figure>
            </div>
        </div>

        <!-- Second Slider - Manchester Universities -->
        <div class="slider-container" style="margin-bottom: 20px;">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-9.png') }}" alt="Manchester Uni 1"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-10.png') }}" alt="Manchester Uni 2"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-12.png') }}" alt="Manchester Uni 3"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-13.png') }}" alt="Manchester Uni 4"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-14.png') }}" alt="Manchester Uni 5"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-15.png') }}" alt="Manchester Uni 6"></a></figure>
            </div>
        </div>

        <!-- Third Slider - Birmingham Universities -->
        <div class="slider-container">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-16.png') }}" alt="Birmingham Uni 1"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-18.png') }}" alt="Birmingham Uni 2"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-19.png') }}" alt="Birmingham Uni 3"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-1.png') }}" alt="Birmingham Uni 4"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-2.png') }}" alt="Birmingham Uni 5"></a></figure>
                <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-4.png') }}" alt="Birmingham Uni 6"></a></figure>
            </div>
        </div>

    </div>
</section>


<!-- Students Experience Section - Slider -->
<section class="students-videos-section" style="padding: 80px 0;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700; color: #003054;">Student's Experience with YES Education</h2>
            <p style="color: #555; font-size: 18px; max-width: 800px; margin: 0 auto; line-height: 1.6;">
                YES Education provide independent guidance, advice, and full application support to international students applying to study in the UK.
            </p>
        </div>

        <div class="student-videos-slider-container">
            <div class="student-videos-slider owl-carousel owl-theme">
                <!-- Video 1 -->
                <div class="student-video-slide">
                    <div class="student-video-card">
                        <div class="student-video-thumbnail" data-video-id="W-IhYxYN9C4">
                            <img src="{{ asset('frontend/assets/images/videos/001.webp') }}" alt="Student Success Story 1" class="student-thumbnail-image">
                            <div class="student-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 2 -->
                <div class="student-video-slide">
                    <div class="student-video-card">
                        <div class="student-video-thumbnail" data-video-id="Fe2__tlLr4c">
                            <img src="{{ asset('frontend/assets/images/videos/002.webp') }}" alt="Student Success Story 2" class="student-thumbnail-image">
                            <div class="student-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 3 -->
                <div class="student-video-slide">
                    <div class="student-video-card">
                        <div class="student-video-thumbnail" data-video-id="5lrZG5lpgfI">
                            <img src="{{ asset('frontend/assets/images/videos/003.webp') }}" alt="Student Success Story 3" class="student-thumbnail-image">
                            <div class="student-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 4 -->
                <div class="student-video-slide">
                    <div class="student-video-card">
                        <div class="student-video-thumbnail" data-video-id="K6dIsIUXayY">
                            <img src="{{ asset('frontend/assets/images/videos/004.webp') }}" alt="Student Success Story 4" class="student-thumbnail-image">
                            <div class="student-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="student-video-slide">
                    <div class="student-video-card">
                        <div class="student-video-thumbnail" data-video-id="VIDEO_ID_5">
                            <img src="{{ asset('frontend/assets/images/videos/005.webp') }}" alt="Student Success Story 5" class="student-thumbnail-image">
                            <div class="student-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video 6 -->
                <div class="student-video-slide">
                    <div class="student-video-card">
                        <div class="student-video-thumbnail" data-video-id="VIDEO_ID_6">
                            <img src="{{ asset('frontend/assets/images/videos/006.webp') }}" alt="Student Success Story 6" class="student-thumbnail-image">
                            <div class="student-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Student Reviews Section -->
<section class="student-reviews-section" style="padding: 80px 0; background: #f8f9fa;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700; color: #003054;">Student Reviews</h2>
            <p style="color: #555; font-size: 18px; max-width: 800px; margin: 0 auto; line-height: 1.6;">
                Hear what our students have to say about their experience with YES Education
            </p>
        </div>

        <div class="student-reviews-slider-container">
            <div class="student-reviews-slider owl-carousel owl-theme">
                <!-- Review 1 -->
                <div class="student-review-slide">
                    <div class="student-review-card">
                        <div class="review-content">
                            <div class="review-message">
                                <p>"YES Education helped me secure admission to my dream university in the UK. Their guidance was invaluable throughout the entire process."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonials/002.webp') }}" alt="Student 1" class="student-image">
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
                                <p>"The team at YES Education provided exceptional support with my visa application and accommodation. I couldn't have done it without them!"</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonials/004.webp') }}" alt="Student 2" class="student-image">
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
                                <p>"From course selection to scholarship applications, YES Education guided me at every step. Highly recommended for international students!"</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonials/004.webp') }}" alt="Student 3" class="student-image">
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
                                <p>"The personalized attention I received from YES Education made all the difference. They truly care about their students' success."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonials/003.webp') }}" alt="Student 4" class="student-image">
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
                                <p>"YES Education made my transition to studying in the UK smooth and stress-free. Their expertise in UK education is unmatched."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonials/002.webp') }}" alt="Student 5" class="student-image">
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
                                <p>"I was struggling with my personal statement until YES Education helped me craft a compelling one that got me multiple offers."</p>
                            </div>
                            <div class="student-image-container">
                                <div class="student-image-wrapper">
                                    <img src="{{ asset('frontend/assets/images/testimonials/001.webp') }}" alt="Student 6" class="student-image">
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



<!-- Journey Roadmap Section - Slim Full Width -->
<section class="journey-roadmap-section-single" style="padding: 40px 0; background: #fff;">
    <div class="journey-roadmap-slider-single-container">
        <div class="sec-title centred" style="margin-bottom: 30px;">
            <h2 style="font-size: 30px; font-weight: 700; color: #003054;">Journey Roadmap</h2>
            <p style="color: #555; font-size: 16px; max-width: 700px; margin: 0 auto; line-height: 1.5;">
                Here’s a quick step-by-step guide to applying to study at a UK university and how we support you throughout the journey.
            </p>
        </div>

        <div class="journey-roadmap-slider-single owl-carousel owl-theme">

            <!-- Step 1 -->
            <div class="journey-step-slide-single">
                <div class="journey-step-card-single">
                    <div class="row align-items-center g-0">
                        <div class="col-lg-6 col-md-6 order-lg-1 order-1">
                            <img src="{{ asset('frontend/assets/images/roadmap/step1.jpg') }}" alt="Initial Consultation" class="step-img-single">
                        </div>
                        <div class="col-lg-6 col-md-6 order-lg-2 order-2">
                            <div class="step-content-single">
                                <div class="step-number-single"><span>01</span></div>
                                <h3 class="step-title-single">Initial Consultation & Profile Assessment</h3>
                                <p class="step-description-single">
                                    We start by understanding your goals, strengths, and preferences to shortlist the best-fit UK universities and courses.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="journey-step-slide-single">
                <div class="journey-step-card-single">
                    <div class="row align-items-center g-0">
                        <!-- Swap order -->
                        <div class="col-lg-6 col-md-6 order-lg-2 order-1">
                            <img src="{{ asset('frontend/assets/images/roadmap/step2.jpg') }}" alt="Application Preparation" class="step-img-single">
                        </div>
                        <div class="col-lg-6 col-md-6 order-lg-1 order-2">
                            <div class="step-content-single">
                                <div class="step-number-single"><span>02</span></div>
                                <h3 class="step-title-single">Application Preparation & Documentation</h3>
                                <p class="step-description-single">
                                    We guide you through gathering all necessary documents and crafting personal statements and reference letters.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="journey-step-slide-single">
                <div class="journey-step-card-single">
                    <div class="row align-items-center g-0">
                        <div class="col-lg-6 col-md-6 order-lg-1 order-1">
                            <img src="{{ asset('frontend/assets/images/roadmap/step3.jpg') }}" alt="University Application" class="step-img-single">
                        </div>
                        <div class="col-lg-6 col-md-6 order-lg-2 order-2">
                            <div class="step-content-single">
                                <div class="step-number-single"><span>03</span></div>
                                <h3 class="step-title-single">University Application Submission</h3>
                                <p class="step-description-single">
                                    Our team ensures all applications are submitted correctly and before deadlines, tracking your progress throughout.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="journey-step-slide-single">
                <div class="journey-step-card-single">
                    <div class="row align-items-center g-0">
                        <div class="col-lg-6 col-md-6 order-lg-2 order-1">
                            <img src="{{ asset('frontend/assets/images/roadmap/step4.jpg') }}" alt="Interview Preparation" class="step-img-single">
                        </div>
                        <div class="col-lg-6 col-md-6 order-lg-1 order-2">
                            <div class="step-content-single">
                                <div class="step-number-single"><span>04</span></div>
                                <h3 class="step-title-single">Interview Preparation & Support</h3>
                                <p class="step-description-single">
                                    We provide mock sessions and feedback to help you excel in university interviews confidently.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="journey-step-slide-single">
                <div class="journey-step-card-single">
                    <div class="row align-items-center g-0">
                        <div class="col-lg-6 col-md-6 order-lg-1 order-1">
                            <img src="{{ asset('frontend/assets/images/roadmap/step5.jpg') }}" alt="Visa Assistance" class="step-img-single">
                        </div>
                        <div class="col-lg-6 col-md-6 order-lg-2 order-2">
                            <div class="step-content-single">
                                <div class="step-number-single"><span>05</span></div>
                                <h3 class="step-title-single">Visa Application & Documentation</h3>
                                <p class="step-description-single">
                                    Our experts help you through the visa process with proper guidance and document checks.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="journey-step-slide-single">
                <div class="journey-step-card-single">
                    <div class="row align-items-center g-0">
                        <div class="col-lg-6 col-md-6 order-lg-2 order-1">
                            <img src="{{ asset('frontend/assets/images/roadmap/step6.jpg') }}" alt="Pre-departure Support" class="step-img-single">
                        </div>
                        <div class="col-lg-6 col-md-6 order-lg-1 order-2">
                            <div class="step-content-single">
                                <div class="step-number-single"><span>06</span></div>
                                <h3 class="step-title-single">Pre-departure Support & Accommodation</h3>
                                <p class="step-description-single">
                                    We help you arrange accommodation, flights, and provide pre-departure orientation for a smooth transition.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Custom Navigation -->
        <div class="custom-nav-single">
            <button class="custom-prev-single"><i class="fas fa-chevron-left"></i></button>
            <button class="custom-next-single"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>




<!-- FAQ Section with Large Circle Image -->
<section class="faq-with-image-section" style="padding: 80px 0; background: #f8f9fa;">
    <div class="auto-container">
        <div class="row align-items-center">
            <!-- FAQ Content Column -->
            <div class="col-lg-6 col-md-12">
                <div class="faq-content">
                    <div class="sec-title" style="margin-bottom: 40px;">
                        <h2 style="font-size: 36px; font-weight: 700; color: #003054;">Frequently Asked Questions</h2>
                        <p style="color: #555; font-size: 16px; margin-top: 15px;">
                            Find answers to common questions about studying in the UK and how we can help you achieve your academic goals.
                        </p>
                    </div>

                    <div class="faq-accordion">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <h4 style="font-size: 18px; font-weight: 600; color: #003054; margin: 0;">
                                    How early should I start my UK university application?
                                </h4>
                                <span class="faq-toggle">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                            <div class="faq-answer">
                                <p style="color: #555; margin: 15px 0 0 0; line-height: 1.6;">
                                    We recommend starting at least 12-18 months before your intended start date. This gives you ample time for research, test preparation, document gathering, and meeting application deadlines.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <h4 style="font-size: 18px; font-weight: 600; color: #003054; margin: 0;">
                                    What are the English language requirements for UK universities?
                                </h4>
                                <span class="faq-toggle">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                            <div class="faq-answer">
                                <p style="color: #555; margin: 15px 0 0 0; line-height: 1.6;">
                                    Most UK universities require IELTS scores of 6.0-7.0 or equivalent. Requirements vary by institution and course. We'll help you understand specific requirements for your chosen universities.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <h4 style="font-size: 18px; font-weight: 600; color: #003054; margin: 0;">
                                    How much does it cost to study in the UK?
                                </h4>
                                <span class="faq-toggle">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                            <div class="faq-answer">
                                <p style="color: #555; margin: 15px 0 0 0; line-height: 1.6;">
                                    Undergraduate tuition fees typically range from £10,000 to £26,000 per year, while postgraduate fees range from £11,000 to £32,000. Living costs vary by location but average £12,000-£15,000 annually.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <h4 style="font-size: 18px; font-weight: 600; color: #003054; margin: 0;">
                                    Can I work while studying in the UK?
                                </h4>
                                <span class="faq-toggle">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                            <div class="faq-answer">
                                <p style="color: #555; margin: 15px 0 0 0; line-height: 1.6;">
                                    Yes, international students can typically work up to 20 hours per week during term time and full-time during holidays. We'll guide you through the regulations and help you understand your work rights.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <h4 style="font-size: 18px; font-weight: 600; color: #003054; margin: 0;">
                                    What scholarships are available for international students?
                                </h4>
                                <span class="faq-toggle">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                            <div class="faq-answer">
                                <p style="color: #555; margin: 15px 0 0 0; line-height: 1.6;">
                                    There are numerous scholarships including Chevening Scholarships, Commonwealth Scholarships, university-specific awards, and country-specific funding. We'll help identify suitable scholarship opportunities for you.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <h4 style="font-size: 18px; font-weight: 600; color: #003054; margin: 0;">
                                    How long does the visa process take?
                                </h4>
                                <span class="faq-toggle">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                            <div class="faq-answer">
                                <p style="color: #555; margin: 15px 0 0 0; line-height: 1.6;">
                                    The student visa process typically takes 3-8 weeks. We recommend applying at least 3 months before your course starts to account for any potential delays and ensure a smooth transition.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Large Circle Image Column -->
            <div class="col-lg-6 col-md-12">
                <div class="circle-image-container text-center">
                    <div class="circle-image-wrapper">
                        <img src="{{ asset('frontend/assets/images/resource/faq_2.original.webp')}}" 
                             alt="Students studying together" 
                             class="circle-image">
                        <div class="image-overlay-content">
                            <h3 style="color: white; font-weight: 700; margin-bottom: 10px;">Ready to Start Your Journey?</h3>
                            <p style="color: white; margin-bottom: 20px;">Join thousands of successful students</p>
                            <a href="#" class="btn btn-primary" style="background: #003054; border: none; padding: 12px 30px; border-radius: 30px; font-weight: 600;">
                                Get Free Consultation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* FAQ Section Styles */
    .faq-with-image-section {
        background: #f8f9fa !important;
    }

    .faq-accordion {
        margin-top: 20px;
    }

    .faq-item {
        background: white;
        border-radius: 8px;
        margin-bottom: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .faq-question {
        padding: 20px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background: rgba(0, 48, 84, 0.03);
    }

    .faq-question h4 {
        flex: 1;
        padding-right: 20px;
    }

    .faq-toggle {
        width: 30px;
        height: 30px;
        background: #003054;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-answer {
        padding: 0 20px 20px;
        max-height: 500px;
    }

    .faq-item.active .faq-toggle {
        transform: rotate(45deg);
        background: #002340;
    }

    /* Circle Image Styles */
    .circle-image-container {
        padding: 0 20px;
    }

    .circle-image-wrapper {
        position: relative;
        width: 450px;
        height: 450px;
        margin: 0 auto;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .circle-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .circle-image-wrapper:hover .circle-image {
        transform: scale(1.05);
    }

    .image-overlay-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 48, 84, 0.9));
        padding: 40px 30px 30px;
        text-align: center;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .circle-image-wrapper {
            width: 400px;
            height: 400px;
        }
    }

    @media (max-width: 992px) {
        .faq-with-image-section {
            padding: 60px 0;
        }
        
        .circle-image-container {
            margin-top: 50px;
        }
        
        .circle-image-wrapper {
            width: 350px;
            height: 350px;
        }
    }

    @media (max-width: 768px) {
        .faq-with-image-section {
            padding: 50px 0;
        }
        
        .sec-title h2 {
            font-size: 28px !important;
        }
        
        .faq-question {
            padding: 15px;
        }
        
        .faq-question h4 {
            font-size: 16px !important;
        }
        
        .circle-image-wrapper {
            width: 300px;
            height: 300px;
        }
        
        .image-overlay-content h3 {
            font-size: 18px;
        }
        
        .image-overlay-content p {
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .circle-image-wrapper {
            width: 280px;
            height: 280px;
        }
        
        .faq-question h4 {
            font-size: 15px !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ Accordion Functionality
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            question.addEventListener('click', () => {
                // Close all other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Toggle current item
                item.classList.toggle('active');
            });
        });
    });
</script>





<!-- Upcoming Events & Latest Blogs Section -->
<section class="events-blogs-section" style="padding: 80px 0; background: #fff; width: 100%;">
    <div class="container-fluid px-5"> <!-- Changed from auto-container -->
        <div class="row">
            <!-- Upcoming Events & Latest News -->
            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                <div class="section-header" style="margin-bottom: 30px;">
                    <h2 style="font-size: 30px; font-weight: 700; color: #003054;">Upcoming Events & Latest News</h2>
                </div>

                @foreach ($blogs as $event)
                <div class="event-card d-flex mb-4 w-100" 
                     style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease;">
                    <!-- Image -->
                    <div class="event-image" style="width: 40%; flex-shrink: 0;">
                        <img src="{{ asset('storage/events_images/' . $event->image) }}" 
                             alt="{{ $event->title }}" 
                             style="width: 100%; height: 180px; object-fit: cover;">
                    </div>
                    <!-- Content -->
                    <div class="event-content" style="padding: 15px; flex: 1;">
                        <span class="badge" 
                              style="background: #003054; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: 13px;">Event</span>
                        <h4 style="font-size: 18px; font-weight: 600; color: #222; margin: 10px 0 5px;">
                            <a href="{{ route('eventDetails', $event->slug) }}" 
                               style="color: inherit; text-decoration: none;">{{ $event->title }}</a>
                        </h4>
                        <p style="color: #555; font-size: 14px; margin-bottom: 5px;">
                            {{ Str::limit($event->description, 100) }}
                        </p>
                        <small style="color: #777;">
                            <i class="far fa-calendar-alt"></i> {{ $event->created_at->format('d M Y') }}
                        </small>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Latest Blogs -->
            <div class="col-lg-6 col-md-12">
                <div class="section-header" style="margin-bottom: 30px;">
                    <h2 style="font-size: 30px; font-weight: 700; color: #003054;">Latest Blogs</h2>
                </div>

                @foreach ($blogs as $blog)
                <div class="blog-card d-flex mb-4 w-100" 
                     style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease;">
                    <!-- Image -->
                    <div class="blog-image" style="width: 40%; flex-shrink: 0;">
                        <img src="{{ asset('storage/blog_images/' . $blog->feature_image) }}" 
                             alt="{{ $blog->title }}" 
                             style="width: 100%; height: 180px; object-fit: cover;">
                    </div>
                    <!-- Content -->
                    <div class="blog-content" style="padding: 15px; flex: 1;">
                        <span class="badge" 
                              style="background: #007bff; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: 13px;">
                              {{ $blog->category->name ?? 'Blog' }}
                        </span>
                        <h4 style="font-size: 18px; font-weight: 600; color: #222; margin: 10px 0 5px;">
                            <a href="{{ route('blogDetails', $blog->slug) }}" 
                               style="color: inherit; text-decoration: none;">{{ $blog->title }}</a>
                        </h4>
                        <p style="color: #555; font-size: 14px; margin-bottom: 5px;">
                            {{ Str::limit($blog->excerpt, 100) }}
                        </p>
                        <small style="color: #777;">
                            <i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('d M Y') }}
                        </small>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>




<!-- feature-section start -->
<section class="feature-section" style="padding: 80px 0;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700;">Why A Student sourcing YES Education?</h2>
            <p style="color: #555;">Students get help for</p>
        </div>

        <div class="row clearfix justify-content-center">
            @foreach ($services as $feature)
            <div class="col-lg-4 col-md-4 col-6 mb-4">
                <a href="{{ route('serviceDetails', $feature->slug) }}" class="text-decoration-none">
                    <div class="feature-card d-flex align-items-center p-3"
                        style="background: #fff; border-radius: 12px; box-shadow: 0 3px 10px rgba(0,0,0,0.08); height: 100%; transition: all 0.3s ease;">

                        <!-- Icon -->
                        <div class="icon flex-shrink-0 text-center"
                            style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('storage/services_images/' . $feature->icon_image) }}"
                                alt="{{ $feature->title }} Icon"
                                style="width: 55px; height: 55px; object-fit: contain;">
                        </div>

                        <!-- Title -->
                        <div class="feature-text text-start" style="margin-left: 10px;">
                            <h3 style="font-size: 17px; font-weight: 600; color: #222; margin: 0;">
                                {{ $feature->title }}
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>









<!-- service-style-two -->
{{--<section class="service-style-two bg-color-3">
    <div class="auto-container">
        <div class="sec-title centred">
            <p>countries we offer support</p>
            <h2>Immigration & Visa Services</h2>
            <span>Sponsoring and managing work visas parts now becoming results the experience <br />aute irure dolor in
                reprehenderit cepteur sint ocaecat cupidatate</span>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><a href="service-details.html"><img
                                src="{{ asset('frontend/assets/images/service/service-1.jpg') }}" alt=""></a></figure>
<div class="lower-content">
    <div class="box">
        <div class="icon-box"><i class="flaticon-manager"></i></div>
        <h3><a href="service-details.html">Working Visas</a></h3>
        <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
            perspiciatis unde omnis iste.</p>
    </div>
    <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
    </div>
</div>
</div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <h3><a href="service-details.html">Studing Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-3.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-air-freight"></i></div>
                <h3><a href="service-details.html">Visiting Visa</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-1.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-manager"></i></div>
                <h3><a href="service-details.html">Working Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <h3><a href="service-details.html">Studing Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-3.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-air-freight"></i></div>
                <h3><a href="service-details.html">Visiting Visa</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img src="assets/images/service/service-1.jpg') }}"
                    alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-manager"></i></div>
                <h3><a href="service-details.html">Working Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <h3><a href="service-details.html">Studing Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-3.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-air-freight"></i></div>
                <h3><a href="service-details.html">Visiting Visa</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- <div class="more-text centred">
        <div class="auto-container">
            <div class="inner">
                <h3>YES Education is clearly your best partner at Immigration& Visa success. <a href="contact.html"><span>Get
                            In Touch</span><i class="flaticon-send"></i></a></h3>
            </div>
        </div>
    </div> -->
</section>--}}
<!-- service-style-two end -->


<!-- team-section -->
<section class="team-section">
    <div class="auto-container">
        <div class="top-inner">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <p>How we help clients</p>
                        <h2>Our Best Experts Ready To Help</h2>
                        <div class="dotted-box">
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>Sponsoring and managing work visas parts now becoming results the experience aute irure dolor
                            in reprehenderit cepteur sint ocae cat cupidatat non proident sunt in culpa quis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-1.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">Charles Henry</a></h4>
                            <span class="designation">CEO - Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-2.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">edward matthew</a></h4>
                            <span class="designation">Immigration Expert</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-3.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">ben christopher</a></h4>
                            <span class="designation">Senior Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-4.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">lindys thomas</a></h4>
                            <span class="designation">Marketing Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->

<!-- immigration-section -->
<section class="immigration-section bg-color-3">
    <div class="auto-container">
        <div class="sec-title centred">
            <p>countries we offer support</p>
            <h2>Immigration & Visa Services <br />Following Countries</h2>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="row clearfix">
            @foreach($destinations as $destination)
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
                <div class="immigration-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img
                                src="{{ asset('storage/destination_images/' . $destination->fi()) }}"
                                alt="{{ $destination->title }}"></figure>
                        <div class="text">
                            <h3><a
                                    href="{{ route('destinationDetails', $destination->slug)}}">{{ $destination->category->name}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- immigration-section end -->


<!-- funfact-style-two -->
<section class="funfact-style-two" style="background:#2E2483; padding: 80px 0;">
    <div class="container">
        <!-- Headline -->
        <h2 style="color:#ffffff; text-align:center; font-size:36px; font-weight:700; margin-bottom:50px;">
            WHY YES EDUCATION ?
        </h2>
        <div class="row justify-content-center text-center text-white">

            <!-- Counter 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="70000">0</span><span>+</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Hours of counselling experience
                    </h5>
                </div>
            </div>

            <!-- Counter 2 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="2">0</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Branch offices with more on the way
                    </h5>
                </div>
            </div>

            <!-- Counter 3 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="600">0</span><span>+</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Student placed Abroad
                    </h5>
                </div>
            </div>

            <!-- Counter 4 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="99">0</span><span>%</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Visa succès rate (one of the best in the country)
                    </h5>
                </div>
            </div>

            <!-- Counter 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="10" data-stop="10">0</span><span>+</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Years of experience
                    </h5>
                </div>
            </div>

            <!-- Counter 2 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span>US$6.5 Million</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Scholarships worth US $4.5 million
                    </h5>
                </div>
            </div>

            <!-- Counter 3 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span>1-1</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Scholarships worth US $4.5 million
                    </h5>
                </div>
            </div>

            <!-- Counter 4 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="21">0</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Universities have exclusive
                    </h5>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- funfact-style-two end -->

<!-- feature-section -->
<section class="feature-section sec-pad-2">
    <div class="auto-container">
        <!-- Headline -->
        <h2 style="text-align:center; font-size:36px; font-weight:700; margin-bottom:50px;">
            SEE OUR TOP COURSES
        </h2>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

            @foreach($courses as $course)
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('storage/courses_images/' . $course->feature_image) }}"
                            alt="{{$course->title}}"></figure>
                    <div class="text">
                        <h3><a href="{{ route('courseDetails', $course->slug) }}">{{$course->title}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- feature-section end -->



<!-- testimonial-style-two -->
<section class="testimonial-style-two bg-color-3">
    <div class="pattern-layer"
        style="background-image: url('{{ asset('frontend/assets/images/shape/pattern-6.png') }}');"></div>
    <div class="auto-container">
        <div class="sec-title centred">
            <p>clients testimonials</p>
            <h2>What Customers <br />Saying About YES Education</h2>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <div class="author-inner">
                        <figure class="image-box"><img src="{{ asset('storage/testimonial/'. $testimonial->image ) }}"
                                alt=""></figure>
                        <h5>{{ $testimonial->name }}</h5>
                        <span class="designation">{{ $testimonial->address }}</span>
                    </div>
                    <div class="content-inner">
                        <div class="rating-box">
                            <h6>{{ $testimonial->company }}</h6>
                            <ul class="rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="text">
                            <p>{!! $testimonial->text_en !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- testimonial-style-two end -->


<!-- news-section -->
<section class="news-section">
    <div class="auto-container">
        <div class="top-inner">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <p>How we help clients</p>
                        <h2>World Immigration News & Updates</h2>
                        <div class="dotted-box">
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>Sponsoring and managing work visas parts now becoming results the experience aute irure dolor
                            in reprehenderit cepteur sint ocae cat cupidatat non proident sunt in culpa quis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('blogDetails', $blog->slug) }}"><img
                                    src="{{ asset('storage/post_images/' . $blog->feature_image) }}"
                                    alt="{{ $blog->title }}"></a></figure>
                        <div class="lower-content">
                            <div class="post-date">
                                <h2>{{ strtoupper($blog->created_at->format('d')) }}</h2>
                                <span>{{ strtoupper($blog->created_at->format('M')) }}</span>
                            </div>
                            <h3><a href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <ul class="post-info clearfix">
                                <li><a href="{{ route('blogDetails', $blog->slug) }}">By
                                        {{ $blog->addedBy->name ?? 'Admin' }}</a></li>
                                <li><a
                                        href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->category->name ?? 'Uncategorized' }}</a>
                                    {{-- ,<a href="{{ route('blogDetails', $blog->slug) }}">Work</a></li> --}}
                            </ul>
                            <div class="link"><a href="{{ route('blogDetails', $blog->slug) }}">Learn More<i
                                        class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- news-section end -->

@endsection
@push('js')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


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


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize Swiper with proper configuration
    var swiper = new Swiper(".mySwiper", {
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        speed: 1000,
        grabCursor: true,
        preloadImages: true,
        updateOnWindowResize: true
    });
    
    // Initialize Owl Carousel
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
<script>
    // Tab switching logic
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));

            button.classList.add('active');
            document.getElementById(button.dataset.tab).classList.add('active');
        });
    });
</script>

<script>
    // brand carousel slider 
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all carousels
        $('.five-item-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize student videos slider
        $('.student-videos-slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });

        // Create scoped video modal
        const studentVideoModal = document.createElement('div');
        studentVideoModal.className = 'student-video-modal';
        studentVideoModal.innerHTML = `
            <div class="student-modal-content">
                <button class="student-modal-close">&times;</button>
                <div class="student-modal-video-container">
                    <iframe id="student-modal-video" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        `;
        document.body.appendChild(studentVideoModal);

        // Get elements with scoped classes
        const studentVideoThumbnails = document.querySelectorAll('.student-video-thumbnail');
        const studentModalClose = document.querySelector('.student-modal-close');
        const studentModalVideo = document.getElementById('student-modal-video');

        // Open video modal
        studentVideoThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                const videoId = this.getAttribute('data-video-id');
                studentModalVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                studentVideoModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close video modal
        studentModalClose.addEventListener('click', function() {
            studentVideoModal.classList.remove('active');
            studentModalVideo.src = '';
            document.body.style.overflow = 'auto';
        });

        // Close modal when clicking outside
        studentVideoModal.addEventListener('click', function(e) {
            if (e.target === studentVideoModal) {
                studentVideoModal.classList.remove('active');
                studentModalVideo.src = '';
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && studentVideoModal.classList.contains('active')) {
                studentVideoModal.classList.remove('active');
                studentModalVideo.src = '';
                document.body.style.overflow = 'auto';
            }
        });
    });
</script>

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
                    }        });
    });
</script>



<script>
document.addEventListener('DOMContentLoaded', function() {
    var journeySliderSingle = $('.journey-roadmap-slider-single').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: false,
        items: 1
    });

    $('.custom-next-single').click(function() {
        journeySliderSingle.trigger('next.owl.carousel');
    });

    $('.custom-prev-single').click(function() {
        journeySliderSingle.trigger('prev.owl.carousel');
    });
});
</script>
@endpush