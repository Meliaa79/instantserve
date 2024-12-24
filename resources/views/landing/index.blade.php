<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- Logo -->
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <title>InstantServe</title>

  <style>
    /* Hover effect for services cards */
    .service-card:hover {
      background-color: #81D8D0; /* Turquoise background on hover */
      color: white; /* White text on hover */
    }
    .service-card:hover h3,
    .service-card:hover p {
      color: white;
    }
    /* About section with transparent turquoise background */
    #about {
      background-color: rgba(64, 224, 208, 0.5); /* Turquoise with transparency */
    }
  </style>
</head>
<body class="font-poppins bg-teal-50">

<!-- Navbar -->
<nav class="fixed w-full top-0 z-50 bg-gradient-to-r from-teal-200 to-gray-200 shadow-md">
  <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <a href="#" class="flex items-center text-xl font-bold text-gray-800">
      <img src="assets/img/logo.png" alt="Logo" class="w-12 h-12 mr-3"> InstantServe
    </a>
    <div class="hidden md:flex space-x-8">
      <a href="#hero" class="text-gray-800 hover:text-teal-600 font-semibold">Rumah</a>
      <a href="#layanan" class="text-gray-800 hover:text-teal-600 font-semibold">Services</a>
      <a href="#about" class="text-gray-800 hover:text-teal-600 font-semibold">Tentang</a>
      <a href="#footer" class="text-gray-800 hover:text-teal-600 font-semibold">Kontak</a>
    </div>
    <div class="space-x-4">
      <a href="{{ route('login') }}" class="px-4 py-2 text-white bg-teal-600 border-2 border-teal-600 rounded-lg hover:bg-white hover:text-black transition duration-300">Login</a>
      <a href="{{ route('signup') }}" class="px-4 py-2 text-white bg-teal-600 border-2 border-teal-600 rounded-lg hover:bg-white hover:text-black transition duration-300">Sign Up</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="hero" class="h-screen flex items-center bg-cover bg-center relative" style="background: linear-gradient(135deg, #81D8D0, #E2E2E2);">
  <div class="container mx-auto flex flex-col md:flex-row items-center px-6">
    <div class="md:w-1/2 text-center md:text-left">
      <h1 class="text-4xl font-extrabold text-gray-900">WELCOME TO INSTANTSERVE</h1>
      <p class="text-gray-700 mt-4">InstantServe hadir untuk menyediakan layanan dengan cepat, kapanpun dan dimanapun kamu membutuhkan jasa, InstantServe solusinya.</p>
      <!-- Update the button to link directly to the login page -->
      <a href="{{ route('login') }}" class="mt-6 inline-block px-6 py-3 text-white bg-teal-600 border-2 border-teal-600 rounded-lg hover:bg-white hover:text-black transition duration-300">Cari Jasa</a>
    </div>
    <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center md:justify-end">
      <img src="assets/img/Group.png" alt="Group Image" class="w-3/4 h-auto">
    </div>
  </div>
</section>



<!-- Services Section with Hover Effect -->
<section id="layanan" class="py-20">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-800">Services</h2>
    <p class="text-gray-500 mt-2">InstantServe hadir menjadi solusi bagi kamu</p>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-10">
      <!-- Each service card has a hover effect applied with class 'service-card' -->
      <div class="service-card bg-white p-6 rounded-lg shadow-lg text-center transition duration-300 ease-in-out">
        <div class="bg-teal-200 w-16 h-16 mx-auto flex items-center justify-center rounded-full mb-4">
          <img src="assets/img/kamera.png" alt="Photography" class="w-8 h-8">
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Photography</h3>
        <p class="text-gray-600 mt-3">Temukan fotografer untuk memotret momen indah mu.</p>
      </div>
      <div class="service-card bg-white p-6 rounded-lg shadow-lg text-center transition duration-300 ease-in-out">
        <div class="bg-teal-200 w-16 h-16 mx-auto flex items-center justify-center rounded-full mb-4">
          <img src="assets/img/sapu.png" alt="Cleaning" class="w-8 h-8">
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Cleaning</h3>
        <p class="text-gray-600 mt-3">Jika sedang malas bebersih bisa tinggal klik saja di sini</p>
      </div>
      <div class="service-card bg-white p-6 rounded-lg shadow-lg text-center transition duration-300 ease-in-out">
        <div class="bg-teal-200 w-16 h-16 mx-auto flex items-center justify-center rounded-full mb-4">
          <img src="assets/img/fc.png" alt="Freelancer" class="w-8 h-8">
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Freelancer</h3>
        <p class="text-gray-600 mt-3">Butuh jasa ketik ataupun pembuatan PPT? ada kok di sini</p>
      </div>
      <div class="service-card bg-white p-6 rounded-lg shadow-lg text-center transition duration-300 ease-in-out">
        <div class="bg-teal-200 w-16 h-16 mx-auto flex items-center justify-center rounded-full mb-4">
          <img src="assets/img/laundry.png" alt="Laundry" class="w-8 h-8">
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Laundry</h3>
        <p class="text-gray-600 mt-3">Temukan jasa untuk mencuci ataupun menyetrika baju</p>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-teal-50">
  <div class="container mx-auto flex flex-col md:flex-row items-center">
    <!-- Logo/Image Section -->
    <div class="md:w-1/2 flex justify-center mb-10 md:mb-0">
      <img src="assets/img/logo.png" alt="InstantServe Logo" class="w-64 h-auto">
    </div>
    
    <!-- Text Section -->
    <div class="md:w-1/2 text-center md:text-left px-6">
      <h2 class="text-3xl font-bold text-teal-600">WHAT IS INSTANTSERVE?</h2>
      <p class="mt-4 text-gray-700 text-lg">
        InstantServe is a service search platform that allows users to quickly and easily find service providers. This site simplifies the search for various services, such as home repairs, cleaning services, handymen, and more.
      </p>
    </div>
  </div>
</section>


<!-- About Section -->

</section>

<!-- Footer Section -->
<footer id="footer" class="bg-black py-10 text-white">
  <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
    <div class="text-center md:text-left mb-6 md:mb-0">
      <h3 class="text-2xl font-bold">InstantServe</h3>
      <p class="mt-4">Amburan, Kecamatan Kuta Selatan, Badung, Bali.</p>
      <p><strong>Phone:</strong> (021) 456-7890<br><strong>Email:</strong> contact@instantserve.com</p>
    </div>
    <div class="text-center md:text-right">
      <p>© 2024 InstantServe. All Rights Reserved.</p>
      <div class="mt-4 flex justify-center md:justify-end space-x-4">
        <a href="#" class="text-white"><i class="fa fa-facebook"></i></a>
        <a href="#" class="text-white"><i class="fa fa-twitter"></i></a>
        <a href="#" class="text-white"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="text-white"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
