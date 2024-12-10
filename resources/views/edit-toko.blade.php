<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Edit Toko</title>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
   @include('components.admin-navbar')

    <!-- Sidebar dan Konten Utama -->
     <div class="flex">
    @include('components.admin-sidebar')
        <!-- Konten Utama -->
        <div class="ml-64 pt-20 w-full p-6">
            <div class="main-section bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-700">Edit Toko</h2>

                <!-- Form Edit Toko -->
                <form method="POST" class="bg-gray-100 p-6 rounded-lg shadow-inner">
                         <h3 class="text-lg font-semibold mb-4 text-gray-600">Edit Detail Toko</h3>
    
                     <div class="mb-4">
                        <label for="nama-toko" class="block text-sm font-medium text-gray-700">Nama Toko:</label>
                        <input type="text" id="nama-toko" name="nama-toko" value="Toko ABC" placeholder="Masukkan nama toko" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="alamat-toko" class="block text-sm font-medium text-gray-700">Alamat:</label>
                        <input type="text" id="alamat-toko" name="alamat-toko" value="Jl. Contoh No.123" placeholder="Masukkan alamat toko" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="kontak-toko" class="block text-sm font-medium text-gray-700">Kontak:</label>
                        <input type="text" id="kontak-toko" name="kontak-toko" value="0812-3456-7890" placeholder="Masukkan kontak toko" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="deskripsi-toko" class="block text-sm font-medium text-gray-700">Deskripsi Toko:</label>
                        <textarea id="deskripsi-toko" name="deskripsi-toko" rows="4" placeholder="Deskripsi tentang toko Anda..." required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">Toko yang menyediakan berbagai kebutuhan harian.</textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Simpan Perubahan</button>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Dropdown Toggle Script
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.nextElementSibling;
                dropdown.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
            
