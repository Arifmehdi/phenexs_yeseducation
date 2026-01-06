<section class="newsletter-section">
    <div class="container">
        <h2>Stay Updated with <span style="color:#DB1F2A;">YES EDUCATION</span></h2>
        <p>Join our newsletter for the latest updates, insights, and special offers. Don't miss out on any of our
            exciting news!</p>


        <form  class="newsletter-form" id="newsletterForm">
            <input type="email" id="email" placeholder="Enter your Email ID" required>
            <button type="submit" id="subscribeBtn">Subscribe Now</button>
        </form>
        <div id="message"></div>

    </div>
</section>

@push('css')
<style>
/* Container */
.newsletter-section {
    width: 100%;
    padding: 50px 20px;
    background-color: #f8f9fa;
    text-align: center;
    font-family: Arial, sans-serif;
}

.newsletter-section .container {
    max-width: 700px;
    margin: 0 auto;
}

/* Heading */
.newsletter-section h2 {
    font-size: 32px;
    color: #1D3564;
    margin-bottom: 15px;
    font-weight: 700;
}

.newsletter-section p {
    font-size: 16px;
    color: #555;
    margin-bottom: 30px;
}

/* Form */
.newsletter-form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
}

/* Input */
.newsletter-form input[type="email"] {
    flex: 1 1 150px;
    padding: 12px 20px;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s, box-shadow 0.3s;
}

@media (max-width: 768px) {
    .newsletter-form input[type="email"] {
        flex: 1 1 100%;
    }
}


.newsletter-form input[type="email"]:focus {
    border-color: #3B308B;
    box-shadow: 0 0 5px rgba(209, 13, 43, 0.5);
}

/* Button */
.newsletter-form button {
    padding: 12px 30px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(90deg, #171F67, #3B308B);
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s, opacity 0.3s;
}

.newsletter-form button:hover {
    opacity: 0.9;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 600px) {
    .newsletter-form {
        flex-direction: column;
    }

    .newsletter-form input[type="email"],
    .newsletter-form button {
        width: 100%;
    }
}
</style>
<style>
    #message {
    margin-top: 15px;
    font-size: 16px;
    font-weight: 600;
}

.success-message {
    color: green;
}

.error-message {
    color: red;
}

.loading-spinner {
    border: 3px solid #ccc;
    border-top: 3px solid #fff;
    border-radius: 50%;
    width: 16px;
    height: 16px;
    animation: spin 0.8s linear infinite;
    display: inline-block;
    vertical-align: middle;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
@endpush 

@push('js')
<script>
document.getElementById('newsletterForm').addEventListener('submit', function(e){
    e.preventDefault();

    let email = document.getElementById('email').value;
    let messageDiv = document.getElementById('message');
    let btn = document.getElementById('subscribeBtn');

    messageDiv.innerHTML = "";
    messageDiv.className = "";

    // Start loading
    btn.disabled = true;
    btn.innerHTML = `<span class="loading-spinner"></span> Processing...`;

    fetch("{{ route('newsletter.store') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ email: email })
    })
    .then(async res => {
        let data = await res.json();

        if (res.status === 200) {
            messageDiv.className = "success-message";
            messageDiv.innerHTML = data.message;
            document.getElementById('newsletterForm').reset();
        } 
        else if (res.status === 422) {
            messageDiv.className = "error-message";
            messageDiv.innerHTML = data.errors.email[0];
        } 
        else {
            messageDiv.className = "error-message";
            messageDiv.innerHTML = "Something went wrong. Please try again.";
        }

        // Restore button
        btn.disabled = false;
        btn.innerHTML = "Subscribe Now";
    })
    .catch(err => {
        messageDiv.className = "error-message";
        messageDiv.innerHTML = "Unexpected error occurred.";

        // Restore button
        btn.disabled = false;
        btn.innerHTML = "Subscribe Now";
    });
});

</script>
@endpush