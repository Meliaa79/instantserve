<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="img-container">
            <img src="{{ asset('assets/img/undraw_online_ad_re_ol62.svg') }}" alt="Sign Up Image">
        </div>
        <div class="login-container">
            <!-- Menampilkan Pesan Error -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="signupForm" method="POST" onsubmit="return validateForm()">
                @csrf
                <h2>Sign Up</h2>

                <!-- Form Fields -->
                <div class="input-div">
                    <div class="i"><i class="fas fa-user"></i></div>
                    <div><h5>Full Name</h5><input type="text" name="full_name" class="input" required></div>
                </div>
                <div class="input-div">
                    <div class="i"><i class="fas fa-user-circle"></i></div>
                    <div><h5>Username</h5><input type="text" name="username" class="input" required></div>
                </div>
                <div class="input-div">
                    <div class="i"><i class="fas fa-envelope"></i></div>
                    <div><h5>Email</h5><input type="email" name="email" class="input" required></div>
                </div>
                <div class="input-div">
                    <div class="i"><i class="fas fa-lock"></i></div>
                    <div><h5>Password</h5><input type="password" name="password" class="input" required></div>
                </div>
                <div class="input-div">
                    <div class="i"><i class="fas fa-lock"></i></div>
                    <div><h5>Confirm Password</h5><input type="password" name="password_confirmation" class="input" required></div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn" style="width: 250px;">Get Started</button>
            </form>

            <!-- Messages -->
            <div id="errorMessage" style="display: none; color: red; margin-top: 20px;"></div>
        </div>
    </div>

    <!-- Add your script here -->
    <script>
        window.addEventListener('load', function() {
            console.log("Route Pilihan:", "{{ route('pilihan') }}");
        });

        function validateForm() {
            let errorMessage = '';

            const password = document.querySelector('input[name="password"]').value;
            const passwordConfirmation = document.querySelector('input[name="password_confirmation"]').value;
            const username = document.querySelector('input[name="username"]').value;
            const email = document.querySelector('input[name="email"]').value;

            // Check if password and confirm password are the same
            if (password !== passwordConfirmation) {
                errorMessage += 'Passwords do not match.\n';
            }

            // Check if password is at least 8 characters
            if (password.length < 8) {
                errorMessage += 'Password must be at least 8 characters.\n';
            }

            // Check if username or email already exists (simulation, replace with your server-side check)
            if (username === 'existingUsername') {
                errorMessage += 'Username already exists.\n';
            }
            if (email === 'existingEmail@example.com') {
                errorMessage += 'Email already exists.\n';
            }

            // If there's any error, show the message and prevent form submission
            if (errorMessage) {
                document.getElementById('errorMessage').innerText = errorMessage;
                document.getElementById('errorMessage').style.display = 'block';
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
    <script src="{{ asset('js/signup.js') }}"></script>
</body>
</html>
