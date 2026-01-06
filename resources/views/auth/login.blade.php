@extends('auth.app')
@section('auth')
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <div class="material-logo">
                <div class="logo-layers">
                    <div class="layer layer-1"></div>
                    <div class="layer layer-2"></div>
                    <div class="layer layer-3"></div>
                </div>
            </div>
            <h2>Sign in</h2>
            <p>to continue to your account</p>
        </div>

        <!-- Display general error message -->
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span style="color: red"> {{ session('error') }} </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Display validation errors -->
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li style="color: red">{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form class="login-form" action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="input-wrapper @error('email') input-error @enderror">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" 
                           class="@error('email') is-invalid @enderror">
                    <label for="email">Email</label>
                    <div class="input-line"></div>
                    <div class="ripple-container"></div>
                </div>
                @error('email')
                    <span class="error-message text-danger small d-block mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="input-wrapper password-wrapper @error('password') input-error @enderror">
                    <input type="password" id="password" name="password" required autocomplete="current-password" 
                           class="@error('password') is-invalid @enderror">
                    <label for="password">Password</label>
                    <div class="input-line"></div>
                    <button type="button" class="password-toggle" id="passwordToggle"
                        aria-label="Toggle password visibility">
                        <div class="toggle-ripple"></div>
                        <span class="toggle-icon"></span>
                    </button>
                    <div class="ripple-container"></div>
                </div>
                @error('password')
                    <span class="error-message text-danger small d-block mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-options">
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="checkbox-label">
                        <div class="checkbox-material">
                            <div class="checkbox-ripple"></div>
                            <svg class="checkbox-icon" viewBox="0 0 24 24">
                                <path class="checkbox-path" d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                            </svg>
                        </div>
                        Keep me signed in
                    </label>
                </div>
                <a href="#" class="forgot-password">Forgot password?</a>
            </div>

            <button type="submit" class="login-btn material-btn">
                <div class="btn-ripple"></div>
                <span class="btn-text">SIGN IN</span>
                <div class="btn-loader">
                    <svg class="loader-circle" viewBox="0 0 50 50">
                        <circle class="loader-path" cx="25" cy="25" r="12" fill="none" stroke="currentColor"
                            stroke-width="3" />
                    </svg>
                </div>
            </button>
        </form>

        <!-- You can keep your social login section if needed -->

        <div class="signup-link">
            <p>Don't have an account? <a href="#" class="create-account">Create account</a></p>
        </div>

        <!-- Optional: Success message that could be shown via JavaScript -->
        <div class="success-message" id="successMessage" style="display: none;">
            <div class="success-elevation">
                <div class="success-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                    </svg>
                </div>
                <h3>Welcome back!</h3>
                <p>Signing you in...</p>
            </div>
        </div>
    </div>
</div>

<!-- Add JavaScript for better UX -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Password toggle functionality
    const passwordToggle = document.getElementById('passwordToggle');
    const passwordInput = document.getElementById('password');
    
    if (passwordToggle) {
        passwordToggle.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('active');
        });
    }

    // Auto-hide alerts after 5 seconds
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
});
</script>

<!-- Add some CSS for error states -->
<style>
.input-error .input-line {
    background-color: #dc3545 !important;
}

.input-error label {
    color: #dc3545 !important;
}

.is-invalid {
    border-color: #dc3545 !important;
}

.alert {
    border-radius: 8px;
    margin-bottom: 20px;
    animation: slideDown 0.3s ease;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

@endsection