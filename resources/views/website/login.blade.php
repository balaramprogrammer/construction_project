<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Sushil Enterprises</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        :root{
            --navy: #12283F;
            --navy-deep: #0B1E33;
            --gold: #D98F2E;
            --gold-deep: #B8741E;
            --ink: #212529;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Barlow', sans-serif;
            background: #f4f5f7;
            min-height: 100vh;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .login-container {
            width: 100%;
            max-width: 1100px;
            min-height: 650px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
            display: flex;
        }

        /* =========================
           LEFT SIDE
        ========================= */

        .office-section {
            width: 52%;
            position: relative;
            background:
                linear-gradient(
                    rgba(11, 30, 51, 0.88),
                    rgba(11, 30, 51, 0.94)
                ),
                url("{{ asset('images/admin-office.jpg') }}") center/cover no-repeat;
            color: #fff;
            padding: 55px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* faint blueprint grid, matches site brand */
        .office-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(217,143,46,0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(217,143,46,0.08) 1px, transparent 1px);
            background-size: 34px 34px;
            pointer-events: none;
        }

        .office-section::after {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            border: 1px solid rgba(217, 143, 46, 0.45);
            right: 35px;
            top: 35px;
            transform: rotate(45deg);
            pointer-events: none;
        }

        .company-logo {
            position: relative;
            z-index: 2;
        }

        .company-logo .logo-icon {
            width: 52px;
            height: 52px;
            background: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 25px;
            margin-bottom: 18px;
            color: #1c1c1c;
        }

        .company-logo h1 {
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .company-logo span {
            color: var(--gold);
        }

        .company-logo p {
            color: #c7cdd4;
            font-size: 15px;
            margin: 0;
            letter-spacing: 1px;
        }

        .office-content {
            position: relative;
            z-index: 2;
        }

        .office-content .small-title {
            color: var(--gold);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .office-content h2 {
            font-size: 38px;
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 18px;
        }

        .office-content h2 span {
            color: var(--gold);
        }

        .office-content p {
            color: #c7cdd4;
            line-height: 1.7;
            max-width: 500px;
            margin-bottom: 25px;
        }

        .office-details {
            display: flex;
            flex-direction: column;
            gap: 13px;
        }

        .office-detail {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #e7e7e7;
            font-size: 15px;
        }

        .office-detail i {
            width: 35px;
            height: 35px;
            border-radius: 7px;
            background: rgba(217, 143, 46, 0.16);
            color: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        .office-footer {
            position: relative;
            z-index: 2;
            color: #9aa4ae;
            font-size: 13px;
        }

        /* =========================
           RIGHT SIDE
        ========================= */

        .login-section {
            width: 48%;
            padding: 60px 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .login-box {
            width: 100%;
            max-width: 390px;
        }

        .login-heading {
            margin-bottom: 35px;
        }

        .login-heading .icon {
            width: 55px;
            height: 55px;
            background: #FDF2E3;
            color: var(--gold-deep);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 18px;
        }

        .login-heading h2 {
            font-size: 32px;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 8px;
        }

        .login-heading p {
            color: #777;
            font-size: 15px;
            margin: 0;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper > i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 17px;
            z-index: 2;
            pointer-events: none;
        }

        .form-control {
            height: 52px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding-left: 47px;
            padding-right: 15px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(217, 143, 46, 0.15);
        }

        .password-toggle {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            width: 36px;
            height: 36px;
            border: none;
            border-radius: 6px;
            background: transparent;
            color: #888;
            cursor: pointer;
            font-size: 17px;
        }

        .password-toggle:hover {
            background: #f2f2f2;
            color: var(--gold-deep);
        }

        .password-toggle:focus-visible,
        .form-control:focus-visible {
            outline: 2px solid var(--gold);
            outline-offset: 2px;
        }

        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #666;
        }

        .remember-me input {
            accent-color: var(--gold);
        }

        .forgot-password {
            color: var(--gold-deep);
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-password:hover {
            color: #8f5814;
        }

        .login-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 8px;
            background: var(--navy);
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background: var(--navy-deep);
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(18, 40, 63, 0.28);
        }

        .login-btn i {
            margin-right: 7px;
        }

        .security-note {
            margin-top: 25px;
            padding: 12px 15px;
            background: #f8f9fa;
            border-radius: 8px;
            display: flex;
            gap: 10px;
            color: #777;
            font-size: 13px;
        }

        .security-note i {
            color: var(--gold-deep);
            font-size: 17px;
            flex-shrink: 0;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .login-container {
                max-width: 600px;
            }

            .office-section {
                display: none;
            }

            .login-section {
                width: 100%;
                padding: 50px 35px;
            }
        }

        @media (max-width: 500px) {

            .login-wrapper {
                padding: 15px;
            }

            .login-section {
                padding: 40px 25px;
            }

            .login-heading h2 {
                font-size: 28px;
            }

            .login-container {
                min-height: auto;
                border-radius: 14px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-container">

        <!-- =========================
             LEFT OFFICE SECTION
        ========================== -->

        <div class="office-section">

            <div class="company-logo">

                <div class="logo-icon">
                    <i class="bi bi-rulers"></i>
                </div>

                <h1>Sushil <span>Enterprises</span></h1>

                <p>
                    AutoCAD • Design • Technical Drafting
                </p>

            </div>


            <div class="office-content">

                <div class="small-title">
                    Administration Panel
                </div>

                <h2>
                    Manage Your <span>Design</span> Operations
                </h2>

                <p>
                    Securely access the Sushil Enterprises administration
                    panel to manage projects, enquiries, services and
                    website content.
                </p>


                <div class="office-details">

                    <div class="office-detail">
                        <i class="bi bi-geo-alt"></i>
                        <span>Lucknow, Uttar Pradesh</span>
                    </div>

                    <div class="office-detail">
                        <i class="bi bi-telephone"></i>
                        <span>+91 94531 75157</span>
                    </div>

                    <div class="office-detail">
                        <i class="bi bi-envelope"></i>
                        <span>info@sushilenterprises.com</span>
                    </div>

                    <div class="office-detail">
                        <i class="bi bi-clock"></i>
                        <span>Mon - Sat | 10:00 AM - 7:00 PM</span>
                    </div>

                </div>

            </div>


            <div class="office-footer">
                © 2026 Sushil Enterprises. All Rights Reserved.
            </div>

        </div>


        <!-- =========================
             RIGHT LOGIN SECTION
        ========================== -->

        <div class="login-section">

            <div class="login-box">

                <div class="login-heading">

                    <div class="icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>

                    <h2>Admin Login</h2>

                    <p>
                        Sign in to access your administration dashboard.
                    </p>

                </div>


                <form action="#" method="POST">

                    <!-- Email -->

                    <div class="form-group">

                        <label class="form-label" for="email">
                            Email Address
                        </label>

                        <div class="input-wrapper">

                            <i class="bi bi-envelope"></i>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Enter your email"
                                autocomplete="username"
                                required
                            >

                        </div>

                    </div>


                    <!-- Password -->

                    <div class="form-group">

                        <label class="form-label" for="password">
                            Password
                        </label>

                        <div class="input-wrapper">

                            <i class="bi bi-lock"></i>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePassword()"
                                aria-label="Show password">

                                <i class="bi bi-eye" id="passwordIcon"></i>

                            </button>

                        </div>

                    </div>


                    <!-- Options -->

                    <div class="login-options">

                        <label class="remember-me">

                            <input
                                type="checkbox"
                                name="remember"
                            >

                            Remember me

                        </label>

                        <a href="#" class="forgot-password">
                            Forgot Password?
                        </a>

                    </div>


                    <!-- Login -->

                    <button type="submit" class="login-btn">

                        <i class="bi bi-box-arrow-in-right"></i>

                        Sign In

                    </button>


                    <!-- Security -->

                    <div class="security-note">

                        <i class="bi bi-shield-check"></i>

                        <span>
                            Your login information is protected with
                            secure authentication.
                        </span>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<script>

    function togglePassword() {

        const password = document.getElementById('password');
        const icon = document.getElementById('passwordIcon');
        const btn = icon.closest('button');

        if (password.type === 'password') {

            password.type = 'text';

            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
            btn.setAttribute('aria-label', 'Hide password');

        } else {

            password.type = 'password';

            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
            btn.setAttribute('aria-label', 'Show password');

        }

    }
</script>
</body>
</html>