<section class="newsletter-section">
    <div class="container">
        <h2>Stay Updated with YES EDUCATION</h2>
        <p>Join our newsletter for the latest updates, insights, and special offers. Don't miss out on any of our
            exciting news!</p>

        <form class="newsletter-form">
            <input type="email" placeholder="Enter your Email ID" required>
            <button type="submit">Subscribe Now</button>
        </form>
    </div>
</section>

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
    border-color: #D10D2B;
    box-shadow: 0 0 5px rgba(209, 13, 43, 0.5);
}

/* Button */
.newsletter-form button {
    padding: 12px 30px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(90deg, #171F67, #D10D2B);
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