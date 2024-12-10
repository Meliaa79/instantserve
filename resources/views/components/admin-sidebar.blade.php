<!-- Sidebar -->
<aside class="w-64 bg-gray-800 text-white h-screen p-4 fixed top-0 left-0 pt-20">
    <h3 class="text-lg font-semibold">Menu</h3>
    <ul class="space-y-2">

        <li>
            <button onclick="toggleDropdown('pesananDropdown')"
                class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                Pesanan <i class="fas fa-chevron-down"></i>
            </button>
            <div id="pesananDropdown" class="dropdown-container hidden space-y-2 ml-4">
                <a href="{{ url('/upload-pesanan') }}" class="block py-1 hover:bg-gray-700 rounded">Upload Pesanan</a>
                <a href="{{ url('/pesanan-hari-ini') }}" class="block py-1 hover:bg-gray-700 rounded">Hari Ini</a>
                <a href="{{ url('/pesanan-minggu-ini') }}" class="block py-1 hover:bg-gray-700 rounded">Minggu Ini</a>
                <a href="{{ url('/pesanan-bulan-ini') }}" class="block py-1 hover:bg-gray-700 rounded">Bulan Ini</a>
            </div>
        </li>
        <li>
            <button onclick="toggleDropdown('jasaDropdown')"
                class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                Jasa <i class="fas fa-chevron-down"></i>
            </button>
            <div id="jasaDropdown" class="dropdown-container hidden space-y-2 ml-4">
                <a href="{{ url('/tambah-jasa') }}" class="block py-1 hover:bg-gray-700 rounded">Tambah Jasa</a>
                <a href="{{ url('/lihat-jasa') }}" class="block py-1 hover:bg-gray-700 rounded">Lihat Jasa</a>
                <a href="{{ url('/edit-jasa') }}" class="block py-1 hover:bg-gray-700 rounded">Edit Jasa</a>
            </div>
        </li>
        <li>
            <button onclick="toggleDropdown('tokoDropdown')"
                class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                Toko <i class="fas fa-chevron-down"></i>
            </button>
            <div id="tokoDropdown" class="dropdown-container hidden space-y-2 ml-4">
                <a href="{{ url('/edit-toko') }}" class="block py-1 hover:bg-gray-700 rounded">Edit Toko</a>
            </div>
        </li>
    </ul>
</aside>