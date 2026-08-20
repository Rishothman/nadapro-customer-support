<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Access | NADAPRO</title>

    <link rel="icon"
        type="image/png"
        href="{{ asset('images/nadapro-logo.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="customer-auth-page">

    <main class="auth-wrapper">

        <!-- Back -->
        <a href="{{ url('/') }}" class="auth-back">
            ← Back to NADAPRO
        </a>

        <div class="auth-container">

            <!-- Brand / Information -->
            <section class="auth-info">

                <div class="auth-brand">
                    <img
                        src="{{ asset('images/nadapro-logo.png') }}"
                        alt="NADAPRO">
                </div>

                <span class="auth-label">
                    CUSTOMER SUPPORT
                </span>

                <h1>
                    We're here to<br>
                    <span>help you.</span>
                </h1>

                <p>
                    Access your NADAPRO customer account to report
                    a service issue and get support from our team.
                </p>

                <div class="response-note">
                    <div class="response-icon">
                        ✓
                    </div>

                    <div>
                        <strong>Quick Response</strong>
                        <span>
                            Our team aims to review your issue
                            within 2–3 hours.
                        </span>
                    </div>
                </div>

            </section>


            <!-- Auth Card -->
            <section class="auth-card">

                <div class="auth-card-header">

                    <span class="auth-card-label">
                        CUSTOMER PORTAL
                    </span>

                    <h2 id="authTitle">
                        Welcome back
                    </h2>

                    <p id="authDescription">
                        Sign in to report or track a service issue.
                    </p>

                </div>


                <!-- LOGIN -->
                <form id="loginForm" class="auth-form">

                    <div class="form-group">

                        <label for="loginEmail">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="loginEmail"
                            placeholder="you@example.com"
                            required>

                    </div>


                    <div class="form-group">

                        <label for="loginPassword">
                            Password
                        </label>

                        <input
                            type="password"
                            id="loginPassword"
                            placeholder="Enter your password"
                            required>

                    </div>


                    <div class="form-options">

                        <label class="remember">
                            <input type="checkbox">
                            <span>Remember me</span>
                        </label>

                        <a href="#">
                            Forgot password?
                        </a>

                    </div>


                    <button type="submit" class="auth-submit">
                        Sign In
                        <span>→</span>
                    </button>

                </form>


                <!-- REGISTER -->
                <form id="registerForm"
                    class="auth-form hidden">

                    <div class="form-group">

                        <label for="registerName">
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="registerName"
                            placeholder="Your full name"
                            required>

                    </div>


                    <div class="form-group">

                        <label for="registerEmail">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="registerEmail"
                            placeholder="you@example.com"
                            required>

                    </div>


                    <div class="form-group">

                        <label for="registerPhone">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            id="registerPhone"
                            placeholder="+94 XX XXX XXXX"
                            required>

                    </div>


                    <div class="form-group">

                        <label for="registerPassword">
                            Create Password
                        </label>

                        <input
                            type="password"
                            id="registerPassword"
                            placeholder="Create a password"
                            required>

                    </div>


                    <button type="submit" class="auth-submit">
                        Create Account
                        <span>→</span>
                    </button>

                </form>


                <!-- SWITCH -->
                <div class="auth-switch">

                    <span id="switchText">
                        Don't have an account?
                    </span>

                    <button
                        type="button"
                        id="switchAuth">
                        Create Account
                    </button>

                </div>

            </section>

        </div>

    </main>


    <script>

        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        const switchAuth = document.getElementById('switchAuth');

        const authTitle = document.getElementById('authTitle');
        const authDescription =
            document.getElementById('authDescription');

        const switchText =
            document.getElementById('switchText');


        switchAuth.addEventListener('click', () => {

            const isLogin =
                !loginForm.classList.contains('hidden');


            if (isLogin) {

                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');

                authTitle.textContent =
                    'Create your account';

                authDescription.textContent =
                    'Create an account to report and track your issues.';

                switchText.textContent =
                    'Already have an account?';

                switchAuth.textContent =
                    'Sign In';

            } else {

                registerForm.classList.add('hidden');
                loginForm.classList.remove('hidden');

                authTitle.textContent =
                    'Welcome back';

                authDescription.textContent =
                    'Sign in to report or track a service issue.';

                switchText.textContent =
                    "Don't have an account?";

                switchAuth.textContent =
                    'Create Account';

            }

        });

    </script>

</body>

</html>