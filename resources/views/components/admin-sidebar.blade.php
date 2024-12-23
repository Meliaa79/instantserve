<!-- Sidebar -->
<aside class="w-64 bg-gray-800 text-white h-screen p-4 fixed top-0 left-0 pt-20">
    <h3 class="text-lg font-semibold">Menu</h3>
    <ul class="space-y-2">

        <li>
            <a href="{{ route('dashboard') }}" 
            class="flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
             Dashboard
         </a>
        </li>
        <li>
            <button onclick="toggleDropdown('pesananDropdown')"
                class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                Pesanan <i class="fas fa-chevron-down"></i>
            </button>
            <div id="pesananDropdown" class="dropdown-container hidden space-y-2 ml-4">
                <a href="{{ url('/upload-pesanan') }}" class="block py-1 hover:bg-gray-700 rounded">Upload Pesanan</a>
                <a href="{{ url('/daftar-pesanan') }}" class="block py-1 hover:bg-gray-700 rounded">Daftar Pesanan</a>
            </div>
        </li>
        <li>
            <button onclick="toggleDropdown('jasaDropdown')"
                class="dropdown-btn flex justify-between w-full py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">
                Jasa <i class="fas fa-chevron-down"></i>
            </button>
            <div id="jasaDropdown" class="dropdown-container hidden space-y-2 ml-4">
                <a href="{{ route('post.create') }}" class="block py-1 hover:bg-gray-700 rounded">Tambah Jasa</a>
                <a href="{{ route('post.index') }}" class="block py-1 hover:bg-gray-700 rounded">Lihat Jasa</a>
            </div>
        </li>
    </ul>
</aside>