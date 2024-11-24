<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        /* Apply Turquoise Background to Top Section */
        header, .navbar {
            background-color: #40E0D0; /* Turquoise color */
        }

        /* Adjust text color if needed */
        header a, .navbar a {
            color: white; /* Makes text white for better contrast */
        }

        /* Font Styles */
        body {
            font-family: 'Open Sans', sans-serif; /* Font utama */
        }

        /* Gambar */
        img {
            display: block; /* Mengubah gambar menjadi elemen blok */
            max-width: 100%; /* Memastikan gambar responsif */
            height: auto; /* Memastikan rasio aspek tetap terjaga */
        }

        /* Navbar */
        #menu-toggle:checked + #menu {
            display: block; /* Menampilkan menu saat toggle di-check */
        }

        .hover\:grow {
            transition: all 0.3s; /* Transisi halus untuk hover */
            transform: scale(1); /* Transformasi default */
        }

        .hover\:grow:hover {
            transform: scale(1.02); /* Sedikit membesar saat hover */
        }

        /* Carousel Styles */
        .carousel-open:checked + .carousel-item {
            position: static; /* Mengatur posisi carousel */
            opacity: 100; /* Mengatur opasitas */
        }

        .carousel-item {
            transition: opacity 0.6s ease-out; /* Transisi opasitas untuk carousel */
        }

        /* Carousel Controls */
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block; /* Menampilkan kontrol carousel */
        }

        /* Carousel Indicators */
        .carousel-indicators {
            list-style: none; /* Menghilangkan bullet list */
            margin: 0; /* Menghilangkan margin */
            padding: 0; /* Menghilangkan padding */
            position: absolute; /* Posisi absolut */
            bottom: 2%; /* Posisi dari bawah */
            left: 0; /* Posisi dari kiri */
            right: 0; /* Posisi dari kanan */
            text-align: center; /* Pusatkan indikator */
            z-index: 10; /* Layer di atas elemen lain */
        }

        /* Gaya untuk Indikator Aktif */
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000; /* Warna aktif untuk indikator */
        }

        /* Slider Styles */
        .slider-container {
            position: relative; /* Posisi relatif untuk kontrol slider */
            overflow: hidden; /* Menghilangkan elemen yang overflow */
            max-width: 800px; /* Lebar maksimal kontainer */
            margin: auto; /* Pusatkan kontainer */
        }

        .slider {
            display: flex; /* Flexbox untuk slider */
            transition: transform 0.5s ease; /* Transisi halus untuk perpindahan slider */
        }

        .slide {
            min-width: 100%; /* Setiap slide memanfaatkan lebar penuh */
            box-sizing: border-box; /* Mengatur box-sizing */
        }

        /* Kontrol Slider */
        .prev, .next {
            position: absolute; /* Posisi absolut untuk tombol */
            top: 50%; /* Posisikan di tengah vertikal */
            transform: translateY(-50%); /* Pindahkan tombol ke tengah */
            background-color: rgba(0, 0, 0, 0.5); /* Latar belakang semi-transparan */
            color: white; /* Warna teks putih */
            border: none; /* Hilangkan border */
            padding: 10px; /* Padding untuk tombol */
            cursor: pointer; /* Kursor pointer saat hover */
            font-size: 24px; /* Ukuran font untuk tombol */
        }

        .prev {
            left: 10px; /* Posisi tombol prev di kiri */
        }

        .next {
            right: 10px; /* Posisi tombol next di kanan */
        }

        /* Caption untuk Gambar */
        .caption {
            font-size: 1rem; /* Ukuran font untuk caption */
            margin-top: 0.5rem; /* Margin atas untuk jarak */
            font-weight: bold; /* Teks tebal */
            text-align: center; /* Pusatkan teks */
        }

        /* Tambahan Gaya untuk Produk */
        .border {
            border: 1px solid #e5e7eb; /* Border untuk produk */
        }

        .rounded-lg {
            border-radius: 0.5rem; /* Sudut membulat */
        }

        .shadow-lg {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Bayangan untuk elemen */
        }

        .container {
            max-width: 1200px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Pusatkan kontainer */
            padding: 0 1rem; /* Padding untuk kontainer */
        }

        .text-center {
            text-align: center; /* Pusatkan teks */
        }

        .bg-light {
            background-color: #f8fafc; /* Warna latar belakang */
        }

        .bg-gray-200 {
            background-color: #e5e7eb; /* Warna latar belakang abu-abu */
        }

        .bg-gray-800 {
            background-color: #1f2937; /* Warna latar belakang abu-abu gelap */
        }

        .text-gray-600 {
            color: #4b5563; /* Warna teks abu-abu */
        }

        .text-white {
            color: white; /* Warna teks putih */
        }

        .text-base {
            font-size: 1rem; /* Ukuran font dasar */
        }

        .font-bold {
            font-weight: bold; /* Font tebal */
        }

        /* Gaya untuk tombol Detail */
        .bg-blue-500 {
            background-color: #3b82f6; /* Warna latar belakang biru */
        }

        .hover\:bg-blue-600:hover {
            background-color: #2563eb; /* Warna latar belakang biru saat hover */
        }

        .py-2 {
            padding-top: 0.5rem; /* Padding atas */
            padding-bottom: 0.5rem; /* Padding bawah */
        }

        .px-4 {
            padding-left: 1rem; /* Padding kiri */
            padding-right: 1rem; /* Padding kanan */
        }

        .rounded {
            border-radius: 0.25rem; /* Sudut membulat */
        }

        /* Footer Styles */
        footer {
            padding: 1rem; /* Padding untuk footer */
        }
    </style>
</head>
<body class="bg-light text-gray-600 leading-normal tracking-normal">
    <script src="/public/js/Favorite.js"></script> 

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

    <!-- Slider -->
    <div class="slider-container mx-auto mt-6" style="max-width: 800px html">
        <div class="slider">
            <div class="slide">
                <img src="img/h4-slide3.png" alt="Slide 1" class="w-full h-64 object-cover rounded-lg shadow-lg">
                <div class="caption text-center mt-2 font-bold">Stripy Zig Zag Jigsaw Pillow and Duvet Set</div>
            </div>
            <div class="slide">
                <img src="img/h4-slide2.png" alt="Slide 2" class="w-full h-64 object-cover rounded-lg shadow-lg">
                <div class="caption text-center mt-2 font-bold">Another Product</div>
            </div>
            <div class="slide">
                <img src="img/h4-slide4.png" alt="Slide 3" class="w-full h-64 object-cover rounded-lg shadow-lg">
                <div class="caption text-center mt-2 font-bold">Yet Another Product</div>
            </div>
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>

    <!-- Konten Halaman Utama -->
    <header class="bg-gray-200 py-20" id="home">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">Selamat Datang di Nordic Store</h1>
            <p class="mt-4 text-lg">Temukan produk-produk berkualitas tinggi kami.</p>
        </div>
    </header>

    <div class="container mx-auto py-8">
        <h2 class="text-3xl font-bold text-center" id="shop">Shop</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <!-- Contoh Produk 1 -->
            <div class="border rounded-lg overflow-hidden shadow-lg">
                <img class="w-full h-48 object-cover" src="img/product-1.png" alt="Produk 1"> 
                <div class="p-4">
                    <h2 class="font-bold text-lg">Nama Produk 1</h2>
                    <p class="text-gray-700">$19.99</p>
                    <a href="Detail1.html" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Detail</a>
                </div>
            </div>
            <!-- Contoh Produk 2 -->
            <div class="border rounded-lg overflow-hidden shadow-lg">
                <img class="w-full h-48 object-cover" src="img/product-2.png" alt="Produk 2"> <!-- Ganti dengan URL gambar produk 2 -->
                <div class="p-4">
                    <h2 class="font-bold text-lg">Nama Produk 2</h2>
                    <p class="text-gray-700">$29.99</p>
                    <a href="detail_produk.html" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Detail</a>
                </div>
            </div>
            <!-- Contoh Produk 3 -->
            <div class="border rounded-lg overflow-hidden shadow-lg">
                <img class="w-full h-48 object-cover" src="img/product-3.png" alt="Produk 3"> <!-- Ganti dengan URL gambar produk 3 -->
                <div class="p-4">
                    <h2 class="font-bold text-lg">Nama Produk 3</h2>
                    <p class="text-gray-700">$39.99</p>
                    <a href="detail_produk.html" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Detail</a>
                </div>
            </div>
            <!-- Tambahkan produk lainnya di sini -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2024 Nordic Store. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Slider -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll(".slide");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? "block" : "none";
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide );
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Initialize slider
        showSlide(currentSlide);
    </script>

</body>
</html>