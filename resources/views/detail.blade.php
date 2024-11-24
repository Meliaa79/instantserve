<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .star {
            cursor: pointer;
            font-size: 2rem;
            color: #ccc;
        }
        .star.checked {
            color: #f5c518;
        }
    </style>
</head>
<body class="bg-light text-gray-600 leading-normal tracking-normal">

    <!-- Navbar -->
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
            <div class="text-lg font-bold">
                <a href="{{ route('homepage') }}">InstantServe</a>
            </div>
            <nav class="space-x-4">
                <a href="{{ route('homepage') }}" class="text-gray-700 hover:text-blue-500">Home</a>
                <a href="{{ route('shop') }}" class="text-gray-700 hover:text-blue-500">Shop</a>
                <a href="{{ route('favorite') }}" class="text-gray-700 hover:text-blue-500">Favorite</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">About</a>
            </nav>
            <div class="flex items-center space-x-4">
                <form action="{{ route('search') }}" method="GET" class="relative">
                    <input type="text" name="search" placeholder="Search" class="pl-10 pr-4 py-2 border rounded-md w-full outline-none focus:border-blue-500">
                    <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
                <a href="#" class="text-gray-700 hover:text-blue-500">
                    <img src="/img/profileIcon.png" class="w-10 h-10 rounded-full" alt="Profile">
                </a>
            </div>
        </div>
    </header>

    <!-- Konten Halaman Detail Produk -->
    <div class="container mx-auto py-8">
        <h2 class="text-3xl font-bold text-center">Detail Produk</h2>
        <div class="flex flex-col md:flex-row mt-6">
            <img class="md:w-1/2 h-128 object-cover" src="img/product-1.png" alt="Nama Produk">
            <div class="md:ml-4 mt-4 md:mt-0">
                <h3 class="font-bold text-2xl">Photo Studio</h3>
                <p class="mt-2">Selamat datang di J Studio, tempat di mana setiap momen berharga diabadikan dengan sentuhan profesional. Kami menyediakan layanan fotografi berkualitas tinggi untuk berbagai keperluan, termasuk:</p>
                <ul class="mt-2 list-disc list-inside">
                    <li>Pre-wedding: Menangkap momen bahagia sebelum hari besar Anda.</li>
                    <li>Pernikahan: Dokumentasi lengkap dari hari istimewa Anda.</li>
                    <li>Keluarga: Potret keluarga yang dapat dinikmati sepanjang masa.</li>
                    <li>Corporate: Foto profesional untuk keperluan bisnis dan branding.</li>
                    <li>Produk: Fotografi produk yang menarik untuk meningkatkan daya tarik pemasaran Anda.</li>
                </ul>
                <p class="mt-2">Dengan tim fotografer berpengalaman dan peralatan canggih, kami berkomitmen untuk memberikan hasil terbaik dan pelayanan yang memuaskan. Hubungi kami hari ini untuk menjadwalkan sesi foto Anda!</p>
                <a href="https://wa.me/081276697052" class="inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Hubungi Kami di WhatsApp</a>                
                <a href="suka.html" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Tambahkan ke Favorit</a>
                <a href="Favorite.html" class="mt-4 inline-block bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Kembali ke Home</a>
            </div>
        </div>

        <!-- Bagian Rating dan Komentar -->
        <div class="mt-8">
            <h3 class="text-xl font-bold">Berikan Rating dan Komentar</h3>
            <form id="ratingForm" class="mt-4">
                <label class="block text-gray-700 font-bold">Rating:</label>
                <div id="starRating" class="flex space-x-1">
                    <span class="star" data-value="1">&#9733;</span>
                    <span class="star" data-value="2">&#9733;</span>
                    <span class="star" data-value="3">&#9733;</span>
                    <span class="star" data-value="4">&#9733;</span>
                    <span class="star" data-value="5">&#9733;</span>
                </div>

                <label class="block text-gray-700 font-bold mt-4">Komentar:</label>
                <textarea id="comment" class="block w-full p-2 mt-1 border rounded" rows="4" placeholder="Tuliskan komentar Anda di sini..."></textarea>

                <button type="button" onclick="submitReview()" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Kirim
                </button>
            </form>

            <!-- Menampilkan Rating dan Komentar -->
            <div id="reviewSection" class="mt-8">
                <h3 class="text-xl font-bold">Rating & Komentar</h3>
                <div id="reviews" class="mt-4">
                    <!-- Review akan ditampilkan di sini -->
                </div>
            </div>
        </div>
    </div>

    <script>
        let selectedRating = 0;

        // Tambahkan event listener ke setiap bintang
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function() {
                selectedRating = this.getAttribute('data-value');
                updateStarRating(selectedRating);
            });
        });

        // Fungsi untuk memperbarui tampilan bintang berdasarkan rating yang dipilih
        function updateStarRating(rating) {
            document.querySelectorAll('.star').forEach(star => {
                star.classList.remove('checked');
                if (star.getAttribute('data-value') <= rating) {
                    star.classList.add('checked');
                }
            });
        }

        function submitReview() {
            // Mengambil nilai komentar
            const comment = document.getElementById("comment").value;
            
            // Validasi rating dan komentar
            if (selectedRating === 0 || comment.trim() === "") {
                alert("Silakan pilih rating dan tulis komentar sebelum mengirim.");
                return;
            }

            // Membuat elemen review baru
            const reviewContainer = document.getElementById("reviews");
            const newReview = document.createElement("div");
            newReview.className = "border p-4 mt-4 rounded shadow";
            newReview.innerHTML = `
                <p><strong>Rating:</strong> ${selectedRating} / 5</p>
                <p><strong>Komentar:</strong> ${comment}</p>
            `;

            // Menambahkan review baru ke bagian review
            reviewContainer.appendChild(newReview);

            // Reset bintang dan komentar setelah mengirim
            updateStarRating(0);
            selectedRating = 0;
            document.getElementById("comment").value = "";
        }
    </script>
</body>
</html>
