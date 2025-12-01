<footer class="footer pt-5">
    <button onclick="window.scrollTo({top:0, behavior:'smooth'})"
        class="scroll-top-btn bg-blue_bg text-white p-2 shadow-lg hover:bg-blue-600" aria-label="scroll top">

        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            stroke="#fff">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.02975 3.3437C10.9834 2.88543 13.0166 2.88543 14.9703 3.3437C17.7916 4.00549 19.9945 6.20842 20.6563 9.02975C21.1146 10.9834 21.1146 13.0166 20.6563 14.9703C19.9945 17.7916 17.7916 19.9945 14.9703 20.6563C13.0166 21.1146 10.9834 21.1146 9.02975 20.6563C6.20842 19.9945 4.0055 17.7916 3.3437 14.9703C2.88543 13.0166 2.88543 10.9834 3.3437 9.02974C4.0055 6.20841 6.20842 4.00549 9.02975 3.3437ZM13.987 13.3634C14.2114 13.5877 14.575 13.5877 14.7993 13.3634C15.0236 13.1391 15.0236 12.7754 14.7993 12.5511L12.4061 10.1579C12.2984 10.0502 12.1523 9.98967 12 9.98967C11.8476 9.98967 11.7015 10.0502 11.5938 10.1579L9.20062 12.5511C8.97631 12.7754 8.97631 13.1391 9.20062 13.3634C9.42492 13.5877 9.7886 13.5877 10.0129 13.3634L12 11.3763L13.987 13.3634Z"
                fill="#ffffff"></path>
        </svg>
    </button>

    <div class="container-fluid px-5">


        <!-- Logo -->
        <div class="text-center mb-4">
            <a href="/">
                <img src="{{ asset('frontend/assets/images/footer-logo.png') }}" alt="YESEDU Logo" width="180">
            </a>
        </div>

        <!-- Footer Main Layout -->
<!-- Footer Main Layout -->
<div class="row align-items-start">

    <!-- COLUMN 1 -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">Useful Links</h5>
        <ul class="list-unstyled">
            <li><a href="#" class="footer-link">Find a University</a></li>
            <li><a href="#" class="footer-link">Find a Course</a></li>
            <li><a href="#" class="footer-link">Popular Courses</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Contact Us</a></li>
        </ul>
    </div>

    <!-- COLUMN 2 -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">About YESEDU</h5>
        <ul class="list-unstyled">
            <li><a href="#" class="footer-link">About Us</a></li>
            <li><a href="#" class="footer-link">What We Do</a></li>
            <li><a href="#" class="footer-link">Why Choose Us</a></li>
            <li><a href="#" class="footer-link">Success Stories</a></li>
        </ul>
    </div>

    <!-- COLUMN 3 -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">Community</h5>
        <ul class="list-unstyled">
            <li><a href="#" class="footer-link">YESEDU News</a></li>
            <li><a href="#" class="footer-link">Latest Blogs</a></li>
            <li><a href="#" class="footer-link">Upcoming Events</a></li>
            <li><a href="#" class="footer-link">Refer a Friend</a></li>
        </ul>
    </div>

    <!-- COLUMN 4 - CONTACT -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">Contact</h5>
        <p class="mb-1"><i class="fas fa-phone"></i> +8809611656889, </p>
        <p class="mb-1"><i class="fas fa-phone-m"></i> +8801898828980</p>
        <p class="mb-1"><i class="fas fa-envelope"></i> support@yesedu.com</p>
        <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</p>

        <div class="mt-2">
            <a href="{{ $ws->fb_url }}" target="_blank" class="footer-social fb"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ $ws->instagram_url }}" target="_blank" class="footer-social ig"><i class="fab fa-instagram"></i></a>
            <a href="{{ $ws->linkedin_url }}" target="_blank" class="footer-social in"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="footer-social tt" target="_blank" aria-label="TikTok">
<svg width="20" height="20" viewBox="0 0 448 512" fill="white" xmlns="http://www.w3.org/2000/svg">
<path d="M448 209.9v125.1c-13.5 1.2-27.2 1.8-41.6 1.8-42.2 0-81.7-11.7-115.4-32.2v142.5c0 67.7-54.9 122.6-122.6 122.6S46 513 46 445.3c0-67.7 54.9-122.6 122.6-122.6 4.2 0 8.4.2 12.5.7V386c-4.4-1-8.9-1.6-13.5-1.6-22.9 0-41.5 18.6-41.5 41.5 0 22.9 18.6 41.5 41.5 41.5s41.5-18.6 41.5-41.5V15.1h124.1c1.8 14.7 5.1 29 9.9 42.5 11.5 32.7 33.2 60.2 61.5 78.4 14.1 9.3 29.9 16.4 46.8 21.1z"/>
</svg>
</a>

        </div>
    </div>

</div>


<!-- MAP -->
<!-- <div class="row mt-3">
    <div class="col-12">
        <iframe 
            src="https://maps.google.com/maps?q=dhaka%20bangladesh&output=embed"
            class="footer-map-full">
        </iframe>
    </div>
</div> -->

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
    <button onclick="window.location.href='tel:+1234567890'" aria-label="Call Now">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
            class="phone-icon">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
            </path>
        </svg>
    </button>
</div>

<!-- Chat Button (Below) -->
<div class="floating-btn chat-btn">
    <button onclick="toggleChat()" aria-label="Chat Now" id="chatToggleBtn">
        <span id="msgIcon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 28 28">
                <path fill="white"
                    d="M17.959 4.667h-7.917c-.752 0-1.372 0-1.877.04-.525.042-1.007.132-1.46.357A3.7 3.7 0 0 0 5.074 6.66c-.231.443-.323.915-.366 1.427-.041.494-.041 1.1-.041 1.835v11.507c0 .214 0 .433.016.612.016.172.058.495.29.779.266.325.669.515 1.095.514.37 0 .656-.17.803-.265.153-.1.328-.236.5-.37l2.252-1.761c.484-.379.627-.486.777-.56q.226-.113.474-.163c.164-.033.344-.037.964-.037h6.12c.752 0 1.372 0 1.877-.04.525-.042 1.007-.132 1.46-.358a3.7 3.7 0 0 0 1.631-1.595c.231-.443.323-.914.366-1.427.041-.494.041-1.1.041-1.834V9.92c0-.735 0-1.34-.04-1.835-.044-.512-.136-.984-.367-1.427a3.7 3.7 0 0 0-1.631-1.595c-.453-.225-.935-.315-1.46-.357-.505-.04-1.125-.04-1.876-.04" />
            </svg>
        </span>

        <span id="closeIcon" style="display:none;font-size:22px;color:white;">✖</span>
    </button>
</div>

<div id="chatBox" class="chat-box">
    <div class="chat-header">Live Chat</div>

    <div class="chat-body" id="chatBody">
        <p><strong>Support:</strong> Hello! 👋</p>
    </div>

    <div class="chat-footer">
        <label for="fileInput">📎</label>
        <input type="file" id="fileInput" hidden>
        <input type="text" id="chatInput" placeholder="Type message...">
        <button onclick="sendMessage()">➤</button>
    </div>
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
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    border: none;
    background: linear-gradient(90deg, #171F67, #D10D2B);
    animation: blink 1s infinite;
    /* blinking animation */
}

.phone-icon {
    width: 28px;
    /* smaller icon */
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
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    border: none;
    background: #000000;
}

.chat-btn svg path {
    fill: white;
    /* ensure icon fully white */
}

/* Hover effect */
.phone-btn button:hover,
.chat-btn button:hover {
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
        transform: scale(1.2);
        /* slightly zoom in */
        opacity: 0.7;
        /* slightly fade */
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
    position: relative;
    /* REQUIRED */
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
    border-color: rgba(255, 255, 255, 0.3);
}
</style>

<style>
.scroll-top-btn {
    position: absolute;
    top: -48px;
    /* slightly above footer */
    right: 6px;
    /* top-right corner */
    background: #242E69;
    /* square background color */
    color: #ffffff !important;
    width: 45px;
    /* square width */
    height: 45px;
    /* square height */
    border-radius: 6px;
    /* small rounded edges */
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
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
<style>
.chat-box {
    position: fixed;
    bottom: 85px;
    right: 20px;
    width: 320px;
    height: 400px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
    display: none;
    flex-direction: column;
    z-index: 9999;
}

.chat-header {
    background: #F8F9FC;
    color: black;
    padding: 10px;
    border-radius: 15px 15px 0 0;
    text-align: center;
    font-weight: bold;
}

.chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
}

.chat-footer {
    display: flex;
    padding: 8px;
    gap: 6px;
    border-top: 1px solid #F8F9FC;
}

.chat-footer input {
    flex: 1;
    padding: 7px;
    border-radius: 20px;
    border: 1px solid #ccc;
}

.chat-footer button {
    background: #030303ff;
    color: white;
    border: none;
    border-radius: 50%;
    padding: 8px 12px;
}
</style>

<style>
.footer-social {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin: 6px;
    border-radius: 50%;
    color: white !important;
    font-size: 18px;
    transition: 0.3s ease;
}

.fb {
    background: #1877f2;
}

.ig {
    background: #e1306c;
}

.in {
    background: #0077b5;
}

.tt {
    background: #000000;
}

.footer-social:hover {
    transform: scale(1.1);
}

.footer-map {
    width: 100%;
    height: 160px;
    border-radius: 10px;
    border: none;
}

.footer-map-full {
    width: 100%;
    height: 230px;
    border-radius: 12px;
    border: none;
}

.footer-social svg {
    width: 20px;
    height: 20px;
}

</style>
<script>
function toggleChat() {
    let chatBox = document.getElementById("chatBox");
    let msgIcon = document.getElementById("msgIcon");
    let closeIcon = document.getElementById("closeIcon");

    if (chatBox.style.display === "flex") {
        chatBox.style.display = "none";
        msgIcon.style.display = "block";
        closeIcon.style.display = "none";
    } else {
        chatBox.style.display = "flex";
        msgIcon.style.display = "none";
        closeIcon.style.display = "block";
    }
}

function sendMessage() {
    let input = document.getElementById("chatInput");
    let chatBody = document.getElementById("chatBody");

    if (input.value === "") return;

    let msg = document.createElement("p");
    msg.innerHTML = "<strong>You:</strong> " + input.value;
    chatBody.appendChild(msg);
    chatBody.scrollTop = chatBody.scrollHeight;
    input.value = "";
}
</script>