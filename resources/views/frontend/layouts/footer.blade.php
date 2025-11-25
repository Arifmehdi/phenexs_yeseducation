<footer class="footer pt-5">
    <button onclick="window.scrollTo({top:0, behavior:'smooth'})"
    class="scroll-top-btn bg-blue_bg text-white p-2 shadow-lg hover:bg-blue-600"
    aria-label="scroll top">

    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
         xmlns="http://www.w3.org/2000/svg" stroke="#fff">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M9.02975 3.3437C10.9834 2.88543 13.0166 2.88543 14.9703 3.3437C17.7916 4.00549 19.9945 6.20842 20.6563 9.02975C21.1146 10.9834 21.1146 13.0166 20.6563 14.9703C19.9945 17.7916 17.7916 19.9945 14.9703 20.6563C13.0166 21.1146 10.9834 21.1146 9.02975 20.6563C6.20842 19.9945 4.0055 17.7916 3.3437 14.9703C2.88543 13.0166 2.88543 10.9834 3.3437 9.02974C4.0055 6.20841 6.20842 4.00549 9.02975 3.3437ZM13.987 13.3634C14.2114 13.5877 14.575 13.5877 14.7993 13.3634C15.0236 13.1391 15.0236 12.7754 14.7993 12.5511L12.4061 10.1579C12.2984 10.0502 12.1523 9.98967 12 9.98967C11.8476 9.98967 11.7015 10.0502 11.5938 10.1579L9.20062 12.5511C8.97631 12.7754 8.97631 13.1391 9.20062 13.3634C9.42492 13.5877 9.7886 13.5877 10.0129 13.3634L12 11.3763L13.987 13.3634Z"
            fill="#ffffff"></path>
    </svg>
</button>

    <div class="container">

        <!-- Logo -->
        <div class="text-center mb-4">
            <a href="/">
                <img src="{{ asset('frontend/assets/images/footer-logo.png') }}" alt="YESEDU Logo" width="180">
            </a>
        </div>

        <!-- Footer Columns -->
        <div class="row">

            <!-- Useful Links -->
            <div class="col-6 col-md-3 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Useful Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Find a University</a></li>
                    <li><a href="#" class="footer-link">Find a Course</a></li>
                    <li><a href="#" class="footer-link">Popular Courses</a></li>
                    <li><a href="#" class="footer-link">Contact Us</a></li>
                </ul>
            </div>

            <!-- About YESEDU -->
            <div class="col-6 col-md-3 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">About YESEDU</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">About Us</a></li>
                    <li><a href="#" class="footer-link">What We Do</a></li>
                    <li><a href="#" class="footer-link">Why Choose Us</a></li>
                    <li><a href="#" class="footer-link">Success Stories</a></li>
                </ul>
            </div>

            <!-- Community -->
            <div class="col-6 col-md-3 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Community</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">YESEDU News</a></li>
                    <li><a href="#" class="footer-link">Latest Blogs</a></li>
                    <li><a href="#" class="footer-link">Upcoming Events</a></li>
                    <li><a href="#" class="footer-link">Refer a Friend</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-6 col-md-3 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Free Application Support</a></li>
                    <li><a href="#" class="footer-link">Student Visa Assistance</a></li>
                    <li><a href="#" class="footer-link">Accommodation Support</a></li>
                    <li><a href="#" class="footer-link">Financial Advice</a></li>
                </ul>
            </div>

        </div>

        <hr class="footer-divider">

        <!-- Global Branches -->
        <div class="text-center small mb-3">
            <strong>Global Branches: </strong>
            <a href="{{ route('globalOffice') }}" class="footer-link">Bangladesh</a> |
            <a href="{{ route('globalOffice') }}" class="footer-link">UAE</a> |
            <a href="{{ route('globalOffice') }}" class="footer-link">UK</a> |
            <a href="{{ route('globalOffice') }}" class="footer-link">Nigeria</a> |
        </div>

        <hr class="footer-divider">

        <!-- Footer Bottom -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div>© 2025-26 YESEDU. All rights reserved.</div>

            <div class="my-2 my-md-0">
                <a href="#" class="footer-link">Privacy Policy</a> -
                <a href="#" class="footer-link">Terms of Use</a>
            </div>

            <!-- Social Icons -->
            <div class="d-flex">
                <a href="#" class="footer-link mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

    </div>
</footer>

<!-- Phone Button (Above) -->
<div class="floating-btn phone-btn">
    <button onclick="window.location.href='tel:+1234567890'" 
            aria-label="Call Now">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
             stroke-width="1.5" stroke="white" class="phone-icon">
            <path stroke-linecap="round" stroke-linejoin="round" 
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
        </svg>
    </button>
</div>

<!-- Chat Button (Below) -->
<div class="floating-btn chat-btn">
    <button onclick="window.open('https://example.com/chat', '_blank')" 
            aria-label="Chat Now">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 28 28">
            <path fill="white" d="M17.959 4.667h-7.917c-.752 0-1.372 0-1.877.04-.525.042-1.007.132-1.46.357A3.7 3.7 0 0 0 5.074 6.66c-.231.443-.323.915-.366 1.427-.041.494-.041 1.1-.041 1.835v11.507c0 .214 0 .433.016.612.016.172.058.495.29.779.266.325.669.515 1.095.514.37 0 .656-.17.803-.265.153-.1.328-.236.5-.37l2.252-1.761c.484-.379.627-.486.777-.56q.226-.113.474-.163c.164-.033.344-.037.964-.037h6.12c.752 0 1.372 0 1.877-.04.525-.042 1.007-.132 1.46-.358a3.7 3.7 0 0 0 1.631-1.595c.231-.443.323-.914.366-1.427.041-.494.041-1.1.041-1.834V9.92c0-.735 0-1.34-.04-1.835-.044-.512-.136-.984-.367-1.427a3.7 3.7 0 0 0-1.631-1.595c-.453-.225-.935-.315-1.46-.357-.505-.04-1.125-.04-1.876-.04M9.333 9.685a.923.923 0 0 0-.933.912c0 .504.418.912.933.912H14a.923.923 0 0 0 .933-.912.923.923 0 0 0-.933-.912zm0 3.193a.923.923 0 0 0-.933.912c0 .504.418.913.933.913H16.8a.923.923 0 0 0 .933-.913.923.923 0 0 0-.933-.912z"/>
        </svg>
    </button>
</div>

<style>
/* Phone Button */
.phone-btn {
    position: fixed;
    bottom: 90px; 
    right: 20px;
    z-index: 100;
}

.phone-btn button {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    border: none;
    background: linear-gradient(90deg, #171F67, #D10D2B);
    animation: blink 1s infinite; /* blinking animation */
}

.phone-icon {
    width: 28px; /* smaller icon */
    height: 28px;
}

/* Chat Button */
.chat-btn {
    position: fixed;
    bottom: 20px; 
    right: 20px;
    z-index: 100;
}

.chat-btn button {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    border: none;
    background: #000000;
}

.chat-btn svg path {
    fill: white; /* ensure icon fully white */
}

/* Hover effect */
.phone-btn button:hover, .chat-btn button:hover {
    transform: translateY(-4px);
    opacity: 0.9;
}

/* Blinking animation */
/* Phone button pulse animation */
@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.2); /* slightly zoom in */
        opacity: 0.7;           /* slightly fade */
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

.phone-btn button {
    animation: pulse 2s infinite ease-in-out;
}

</style>



<style>
.footer {
    background-color: #242E69;
    color: #ffffff;
    position: relative;  /* REQUIRED */
}


.footer * {
    color: #ffffff !important;
}

.footer-link {
    color: #ffffff !important;
    text-decoration: none;
    transition: 0.3s;
}

.footer-link:hover {
    opacity: 0.7;
}

.footer-divider {
    border-color: rgba(255,255,255,0.3);
}
</style>

<style>
.scroll-top-btn {
    position: absolute;
    top: -48px;           /* slightly above footer */
    right: 6px;          /* top-right corner */
    background: #242E69;  /* square background color */
    color: #ffffff !important;
    width: 45px;          /* square width */
    height: 45px;         /* square height */
    border-radius: 6px;   /* small rounded edges */
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(0,0,0,0.25);
    transition: 0.3s ease;
    z-index: 99;
}

/* Hover effect */
.scroll-top-btn:hover {
    transform: translateY(-3px);
    opacity: 0.9;
}

/* White arrow */
.scroll-top-btn svg path {
    fill: #ffffff !important;
}


</style>
