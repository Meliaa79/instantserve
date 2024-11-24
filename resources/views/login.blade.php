<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .centered-text {
            text-align: center;
            margin-top: 15px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="img-container">
            <img src="{{ asset('assets/img/group-49.png') }}" alt="Login Image">
        </div>
        
        <div class="login-container">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <h2>Welcome</h2>

                @if(session('error'))
                    <div class="alert alert-danger centered-text">{{ session('error') }}</div>
                @endif

                <!-- Input Username -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input type="text" name="username" class="input" required>
                    </div>
                </div>

                <!-- Input Password -->
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" name="password" class="input" required>
                    </div>
                </div>

                <input type="submit" class="btn" value="Login">

                <div class="centered-text">
                    <a href="{{ route('signup') }}">Don't have an account yet?</a>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
