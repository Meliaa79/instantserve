<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstantServe - KTP Verification</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <script>
        function previewImage(event) {
            const previewContainer = document.getElementById('ktp-preview-container');
            const preview = document.getElementById('ktp-preview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function() {
                    preview.src = reader.result;
                    previewContainer.style.display = 'flex'; // Show the preview container
                }

                reader.readAsDataURL(file);
            }
        }

        function resetImage() {
            const inputFile = document.getElementById('ktp-upload');
            const previewContainer = document.getElementById('ktp-preview-container');
            const preview = document.getElementById('ktp-preview');

            inputFile.value = ''; // Clear the file input
            previewContainer.style.display = 'none'; // Hide the preview container
            preview.src = ''; // Clear the preview image
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-container">
                <img src="{{ asset('img/logo.png') }}" alt="InstantServe Logo" class="logo">
            </div>
            <div class="steps">
                <div class="step active">
                    <div class="circle"></div>
                    <span>Verifikasi Data Diri</span>
                </div>
                <div class="line"></div>
                <div class="step">
                    <div class="circle"></div>
                    <span>Upload Layanan yang Diberikan</span>
                </div>
            </div>
        </div>
        <div class="form-container">
            <form action="{{ route('ktp.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ktp-upload">Upload Foto KTP</label>
                    <div class="upload-box">
                        <input type="file" id="ktp-upload" name="ktp_image" accept="image/*" required onchange="previewImage(event)">
                        <div id="ktp-preview-container" class="preview-container" style="display: none;">
                            <img id="ktp-preview" src="#" alt="Preview Image" />
                        </div>
                    </div>
                    <button type="button" class="reset-button" onclick="resetImage()">Ganti Gambar</button>
                </div>
                <div class="form-group">
                    <label for="nik">NIK (Sesuai KTP)</label>
                    <input type="text" id="nik" name="nik" value="{{ old('nik', $user->nik ?? '') }}" placeholder="NIK (3264...)" required>
                </div>
                <div class="form-group">
                    <label for="full-name">Nama Lengkap (Sesuai KTP)</label>
                    <input type="text" id="full-name" name="full_name" value="{{ old('full_name', $user->full_name ?? '') }}" placeholder="nama lengkap..." required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat (Sesuai KTP)</label>
                    <input type="text" id="address" name="address" value="{{ old('address', $user->address ?? '') }}" placeholder="alamat..." required>
                </div>
                <div class="form-group">
                    <label for="dob">Tanggal Lahir (Sesuai KTP)</label>
                    <input type="date" id="dob" name="dob" value="{{ old('dob', $user->dob ?? '') }}" required>
                </div>
                <button type="submit" class="next-button">Berikutnya</button>
            </form>
        </div>
    </div>
</body>
</html>
