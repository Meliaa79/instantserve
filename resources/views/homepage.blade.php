<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title', 'InstantServe')</title>
</head>
<body class="bg-gray-100">

    <!-- Header -->
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
                <a href="#" onclick="window.location.href='/profile'" class="text-gray-700 hover:text-blue-500">
                    <img src="/img/profileIcon.png" class="w-10 h-10 rounded-full" alt="Profile">
                </a>

            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto mt-6">
        <section class="container mx-auto px-4 py-8">
            <!-- Banner Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-800 text-white rounded-lg overflow-hidden relative">
                    <img src="{{ asset('img/bannerLaundry.jpg') }}" alt="bannerLaundry" class="w-full object-fill opacity-60">
                    <div class="absolute top-0 left-0 p-6">
                        <h2 class="text-2xl font-semibold">Laundry</h2>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Shop Now →</a>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6">
                    <div class="bg-gray-800 text-white rounded-lg overflow-hidden relative">
                        <img src="{{ asset('img/Housekeeping.avif') }}" alt="HouseKeeping" class="w-full h-32 object-cover opacity-60">
                        <div class="absolute top-0 left-0 p-6">
                            <h2 class="text-lg font-semibold">House Keeping</h2>
                            <a href="#" class="mt-1 inline-block bg-blue-500 text-white px-4 py-1 rounded">Shop Now →</a>
                        </div>
                    </div>
                    <div class="bg-gray-800 text-white rounded-lg overflow-hidden relative">
                        <img src="{{ asset('img/PhotographyBanner.avif') }}" alt="Photography" class="w-full h-32 object-cover opacity-50">
                        <div class="absolute top-0 left-0 p-6">
                            <h2 class="text-lg font-semibold">Photography</h2>
                            <a href="#" class="mt-1 inline-block bg-blue-500 text-white px-4 py-1 rounded">Shop Now →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="container mx-auto px-4 py-8">
            <h2 class="text-2xl font-bold mb-6">Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @forelse ($data as $item)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('storage/posts/' . $item->image_url) }}" alt="{{ $item->alt }}"  class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800">{{ $item->nama_layanan }}</h3>
                            {{-- <p class="text-gray-600">{{ $item->user->name }}</p> --}}
                        </div>
                    </div>
                @empty
                    <h3 class="font-semibold text-gray-800">Tidak Ada Service</h3>
                @endforelse
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <img src="/img/logo2.png" class="h-32" alt="Instant Serve Logo">
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Instant Serve™. All Rights Reserved.</span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
