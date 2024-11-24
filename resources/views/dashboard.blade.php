<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Dashboard</title>
    <script>
        function openTab(evt, tabName) {
            let tabContent = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }
            let tabLinks = document.getElementsByClassName("tab-link");
            for (let i = 0; i < tabLinks.length; i++) {
                tabLinks[i].classList.remove("text-blue-600", "border-blue-600");
                tabLinks[i].classList.add("text-gray-600");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("text-blue-600", "border-blue-600");
            evt.currentTarget.classList.remove("text-gray-600");
        }

        window.onload = function() {
            document.getElementById("defaultOpen").click();
        }

        function toggleDropdown(dropdownId) {
            let dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle("hidden");
        }
    </script>
</head>

<body class="bg-gray-100 font-sans">
@include('components.admin-navbar')
<div class="flex pt-16">


    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white h-screen p-4 fixed top-0 left-0 pt-20">
        <h3 class="text-lg font-semibold">Menu</h3>
        <ul class="space-y-2">
        <li>
            <a href="{{ url('/dashboard') }}" class="flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                Dashboard
            </a>
        </li>
            <li>
                <button onclick="toggleDropdown('pesananDropdown')" class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                    Pesanan <i class="fas fa-chevron-down"></i>
                </button>
                <div id="pesananDropdown" class="dropdown-container hidden space-y-2 ml-4">
                    <a href="{{ url('/pesanan-hari-ini') }}" class="block py-1 hover:bg-gray-700 rounded">Hari Ini</a>
                    <a href="{{ url('/pesanan-minggu-ini') }}" class="block py-1 hover:bg-gray-700 rounded">Minggu Ini</a>
                    <a href="{{ url('/pesanan-bulan-ini') }}" class="block py-1 hover:bg-gray-700 rounded">Bulan Ini</a>
                </div>
            </li>
            <li>
                <button onclick="toggleDropdown('jasaDropdown')" class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                    Jasa <i class="fas fa-chevron-down"></i>
                </button>
                <div id="jasaDropdown" class="dropdown-container hidden space-y-2 ml-4">
                    <a href="{{ url('/tambah-jasa') }}" class="block py-1 hover:bg-gray-700 rounded">Tambah Jasa</a>
                    <a href="{{ url('/lihat-jasa') }}" class="block py-1 hover:bg-gray-700 rounded">Lihat Jasa</a>
                </div>
            </li>
            <li>
                <button onclick="toggleDropdown('tokoDropdown')" class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                    Toko <i class="fas fa-chevron-down"></i>
                </button>
                <div id="tokoDropdown" class="dropdown-container hidden space-y-2 ml-4">
                    <a href="{{ url('/edit-toko') }}" class="block py-1 hover:bg-gray-700 rounded">Edit Toko</a>
                </div>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="ml-64 pt-10 w-full p-6">
        <div class="relative">
            <div class="flex overflow-x-scroll space-x-4">
                    <img src="{{ asset('images/istockphoto-538706483-170667a.jpg') }}" alt="Galaxy Laundry 1" class="rounded-lg shadow-md w-full">
                    <img src="{{ asset('images/istockphoto-538706483-170667a.jpg') }}" alt="Galaxy Laundry 2" class="rounded-lg shadow-md w-full">
                    <img src="{{ asset('images/istockphoto-538706483-170667a.jpg') }}" alt="Galaxy Laundry 3" class="rounded-lg shadow-md w-full">
                </div>
                <div class="absolute bottom-2 left-2 bg-white rounded-md px-2 py-1 text-sm text-gray-800">3/15</div>
            </div>

            <div class="mt-6">
                <h1 class="text-3xl font-bold text-gray-800">Galaxy Laundry</h1>
                <div class="flex items-center mt-2">
                    <span class="text-yellow-500"><i class="fas fa-star"></i> 4.0</span>
                </div>
                <div class="bg-blue-100 text-blue-800 mt-4 p-3 rounded-lg">
                    <p><i class="fas fa-shield-alt"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis.</p>
                </div>
            </div>

            <div class="mt-8 border-b-2 border-gray-200">
                <button id="defaultOpen" class="tab-link py-2 px-4 text-blue-600 border-b-2 border-blue-600" onclick="openTab(event, 'overview')">Ringkasan</button>
                <button class="tab-link py-2 px-4 text-gray-600 border-b-2 border-transparent" onclick="openTab(event, 'jasa')">Layanan</button>
                <button class="tab-link py-2 px-4 text-gray-600 border-b-2 border-transparent" onclick="openTab(event, 'reviews')">Ulasan</button>
                <button class="tab-link py-2 px-4 text-gray-600 border-b-2 border-transparent" onclick="openTab(event, 'location')">Lokasi</button>
            </div>

            <div id="overview" class="tab-content mt-6">
                <h2 class="text-xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                <ul class="mt-4 text-gray-700 space-y-2">
                    <li><i class="fas fa-check-circle text-green-500"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li><i class="fas fa-check-circle text-green-500"></i> Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</li>
                    <li><i class="fas fa-check-circle text-green-500"></i> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                </ul>
            </div>

            <div id="jasa" class="tab-content mt-6" style="display:none;">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Jasa/Layanan Kami</h3>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-gray-700">Cuci</h4>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-gray-700">Cuci dan Setrika</h4>
                        <p class="text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-gray-700">Setrika</h4>
                        <p class="text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>

            <div id="reviews" class="tab-content mt-6" style="display:none;">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Ulasan Pelanggan</h3>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-500"><i class="fas fa-star"></i> 5.0</span>
                            <span class="ml-2 text-gray-800 font-semibold">John Doe</span>
                        </div>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-500"><i class="fas fa-star"></i> 4.5</span>
                            <span class="ml-2 text-gray-800 font-semibold">Jane Smith</span>
                        </div>
                        <p class="text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>

            <div id="location" class="tab-content mt-6" style="display:none;">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Lokasi Kami</h3>
                <p class="text-gray-700">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</body>

</html>
