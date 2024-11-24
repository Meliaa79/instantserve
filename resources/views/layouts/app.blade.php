<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/css/app.css')
    
    <title>@yield('title', config('app.name'))</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    @include('layouts.partials.navbar')  

    <!-- Main Content -->
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>
    
    <!-- Footer -->
    @include('layouts.partials.footer')  

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @vite('resources/js/app.js')
    
    @stack('scripts')
</body>
</html>
