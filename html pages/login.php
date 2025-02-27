<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabTrack - Lab Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            font-size: 16px;
        }

        body {
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .container-login {
            display: flex;
            width: 62.5rem;
            max-width: 100%;
            height: auto;
            min-height: 37.5rem;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 0.625rem 1.875rem rgba(0, 0, 0, 0.1);
        }

        .left-panel {
            flex: 1;
            background-color: #2185d0;
            color: white;
            padding: 3.75rem 2.5rem;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .right-panel {
            flex: 1;
            background-color: white;
            padding: 3.75rem 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo-login {
            display: flex;
            align-items: center;
            margin-bottom: 1.875rem;
        }

        .logo-login i {
            font-size: 2.125rem;
            margin-right: 0.5rem;
        }

        .logo-login-text {
            font-size: 1.75rem;
            font-weight: bold;
        }

        .welcome-text {
            font-size: 2.25rem;
            font-weight: bold;
            margin-bottom: 1.25rem;
        }

        .description {
            font-size: 1.125rem;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 2.5rem;
        }

        .login-form h2 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1.875rem;
        }

        .form-group {
            margin-bottom: 1.563rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 0.0625rem solid #ddd;
            border-radius: 0.375rem;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #2185d0;
            outline: none;
        }

        .form-group .icon {
            position: absolute;
            right: 0.875rem;
            top: 2.375rem;
            color: #888;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.563rem;
            font-size: 0.875rem;
        }

        .remember {
            display: flex;
            align-items: center;
        }

        .remember input {
            margin-right: 0.5rem;
        }
        .forgot{
            margin-left: auto;
        }
        .forgot a {
            color: #2185d0;
            text-decoration: none;
        }

        .forgot a:hover {
            text-decoration: underline;
        }

        .sign-in-btn {
            width: 100%;
            padding: 0.875rem;
            background-color: #2185d0;
            color: white;
            border: none;
            border-radius: 0.375rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 1.25rem;
        }

        .sign-in-btn:hover {
            background-color: #1a69a4;
        }

        .sso-options {
            margin-top: 1.563rem;
            text-align: center;
        }

        .divider {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #777;
        }

        .divider-line {
            flex-grow: 1;
            height: 0.0625rem;
            background-color: #ddd;
        }

        .divider-text {
            padding: 0 0.938rem;
            font-size: 0.875rem;
        }

        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 0.75rem;
            background-color: white;
            border: 0.0625rem solid #ddd;
            border-radius: 0.375rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .google-btn:hover {
            background-color: #f5f5f5;
        }

        .google-btn img {
            width: 1.25rem;
            margin-right: 0.625rem;
        }

        .sign-up {
            text-align: center;
            margin-top: 1.563rem;
            font-size: 0.875rem;
            color: #666;
        }

        .sign-up a {
            color: #2185d0;
            text-decoration: none;
            font-weight: 500;
        }

        .sign-up a:hover {
            text-decoration: underline;
        }

        .copyright {
            position: absolute;
            bottom: 1.25rem;
            font-size: 0.813rem;
            opacity: 0.8;
        }

        .student-grievance {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .grievance-button {
            padding: 0.625rem 1.25rem;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 0.25rem;
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
        }

        .grievance-button svg {
            margin-right: 0.5rem;
        }

        .grievance-button:hover {
            background-color: #c0392b;
        }

        .illustration {
            margin-top: 2.5rem;
            text-align: center;
        }

        .illustration img {
            max-width: 80%;
            height: auto;
        }

        @media (max-width: 64rem) {
            .container-login {
                width: 56.25rem;
            }
        }

        @media (max-width: 48rem) {
            .container-login {
                flex-direction: column;
                width: 31.25rem;
                height: auto;
            }

            .left-panel, .right-panel {
                padding: 2.5rem;
            }
        }

        @media (max-width: 31.25rem) {
            .container-login {
                width: 100%;
                border-radius: 0;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-login">
        <div class="left-panel">
            <div class="logo-login">
                <i class="fa-brands fa-watchman-monitoring"></i>
                <div class="logo-login-text">LabTrack</div>
            </div>
            <h1 class="welcome-text">Welcome Back</h1>
            <p class="description">Access your lab management dashboard to monitor device status, handle grievance
                requests, and resolve student grievances.</p>
        </div>

        <div class="right-panel">
            <div class="login-form">
                <h2>Sign in to your account</h2>

                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="email" id="email" placeholder="Enter your username">
                    <i class="fas fa-circle-user icon"></i>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                    <i class="fas fa-eye icon"></i>
                </div>

                <div class="remember-forgot">
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>

                <button class="sign-in-btn" onclick="window.location.href='index.php' ">Sign In</button>

                <div class="divider">
                    <div class="divider-line"></div>
                </div>

                <div class="student-grievance" >
                    <button class="grievance-button">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Student Grievance
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>