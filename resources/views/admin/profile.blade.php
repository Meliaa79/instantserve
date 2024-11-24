<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InstantServe - Admin Profil</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* CSS yang sama seperti sebelumnya */
        .profile-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Titillium Web', sans-serif;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn-edit, .btn-save {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-edit {
            background: #3498db;
            color: white;
        }

        .btn-save {
            background: #1abc9c;
            color: white;
        }

        .btn-edit:hover, .btn-save:hover {
            opacity: 0.9;
        }

        .profile-img-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-img-container input {
            display: none;
        }

        .profile-img-frame {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #3498db;
            display: inline-block;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
        }

        .profile-img-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <h3>Profil Admin</h3>

        <form id="profile-form" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="profile-img-container">
                <div class="profile-img-frame">
                    <img src="{{ Auth::user()->profile_picture ? asset('storage/profile_pictures/' . Auth::user()->profile_picture) : 'https://via.placeholder.com/100' }}" alt="Profile Picture" id="profile-image">
                </div>
                <input type="file" id="profile_picture" name="profile_picture" accept="image/*" disabled>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ Auth::user()->username }}" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" disabled>
            </div>
            <div class="form-group">
                <label for="shop">Nama Toko</label>
                <input type="text" id="shop_name" name="shop_name" value="{{ Auth::user()->shop_name }}" disabled>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" value="{{ Auth::user()->phone }}" disabled>
            </div>
            <div class="form-group">
                <label for="dob">Tanggal Lahir</label>
                <input type="date" id="dob" name="dob" value="{{ Auth::user()->dob }}" disabled>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div>
                    <input type="radio" id="male" name="gender" value="male" {{ Auth::user()->gender == 'male' ? 'checked' : '' }} disabled>
                    <label for="male">Laki-laki</label>

                    <input type="radio" id="female" name="gender" value="female" {{ Auth::user()->gender == 'female' ? 'checked' : '' }} disabled>
                    <label for="female">Perempuan</label>
                </div>
            </div>

            <div class="form-actions" style="text-align: right;">
                <button type="button" class="btn-edit" id="edit-btn">Edit</button>
                <button type="submit" class="btn-save" id="save-btn" disabled>Simpan</button>
            </div>
        </form>
    </div>

    <script>
        const editButton = document.getElementById('edit-btn');
        const saveButton = document.getElementById('save-btn');
        const inputs = document.querySelectorAll('input');
        const profileImage = document.getElementById('profile-image');
        const profilePictureInput = document.getElementById('profile_picture');

        editButton.addEventListener('click', () => {
            inputs.forEach(input => input.disabled = false); // Enable inputs
            saveButton.disabled = false; // Enable save button
        });

        profileImage.addEventListener('click', () => {
            profilePictureInput.click();
        });

        profilePictureInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        saveButton.addEventListener('click', () => {
            alert('Profil berhasil diperbarui!');
        });
    </script>

</body>
</html>
