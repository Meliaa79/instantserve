<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorit Produk</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
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

    <!-- Daftar Produk Favorit -->
    <div class="container mx-auto py-8">
        <h2 class="text-3xl font-bold text-center">Produk Favorit</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <!-- Contoh Produk Favorit 1 -->
            <div class="border rounded-lg overflow-hidden shadow-lg">
                <img class="w-full h-48 object-cover" src="img/product-1.png" alt="Produk Favorit 1"> 
                <div class="p-4">
                    <h2 class="font-bold text-lg">J Studio</h2>
                    <a href="{{ route('detail') }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Detail</a>
                </div>
            </div>

            <!-- Contoh Produk Favorit 2 -->
            <div class="border rounded-lg overflow-hidden shadow-lg">
                <img class="w-full h-48 object-cover" src="img/product-2.png" alt="Produk Favorit 2">
                <div class="p-4">
                    <h2 class="font-bold text-lg">Laundry Bahagia</h2>
                    <a href="Detail2.html" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Detail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 py-4 text-center">
    </footer>

</body>
</html>
