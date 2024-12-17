<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Upload Pesanan</title>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    @include('components.admin-navbar')

    <!-- Sidebar dan Konten Utama -->
    <div class="flex">
        @include('components.admin-sidebar')

        <div class="ml-64 pt-20 w-full p-6">
            <div class="main-section bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-700">Form Upload Pesanan</h2>
                <!-- Form Section -->
                <form method="POST" action="{{ route('upload.pesanan') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner">
                        <h3 class="text-lg font-semibold mb-4 text-gray-600">Isi Detail Pesanan</h3>
                        
                        <!-- Nama Customer -->
                        <div class="mb-4">
                            <label for="nama-customer" class="block text-sm font-medium text-gray-700">Nama Customer:</label>
                            <input type="text" id="nama-customer" name="nama_customer" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <!-- Nama Pesanan -->
                        <div class="mb-4">
                            <label for="nama-pesanan" class="block text-sm font-medium text-gray-700">Nama Pesanan:</label>
                            <input type="text" id="nama-pesanan" name="nama_pesanan" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Tanggal Pesanan -->
                        <div class="mb-4">
                            <label for="tanggal-pesanan" class="block text-sm font-medium text-gray-700">Tanggal Pesanan:</label>
                            <input type="date" id="tanggal-pesanan" name="tanggal_pesanan" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Deskripsi Pesanan -->
                        <div class="mb-4">
                            <label for="deskripsi-pesanan" class="block text-sm font-medium text-gray-700">Deskripsi Pesanan:</label>
                            <input type="text" id="deskripsi-pesanan" name="deskripsi_pesanan" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- No Telepon -->
                        <div class="mb-4">
                            <label for="no-telepon" class="block text-sm font-medium text-gray-700">No Telepon:</label>
                            <input type="text" id="no-telepon" name="no_telepon" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                            style="background-color: #81D8D0;">Upload Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.nextElementSibling;
                dropdown.classList.toggle('hidden');
            });
        });

        document.querySelectorAll('.day-container').forEach(dayContainer => {
            const cardContainer = dayContainer.querySelector('.card-container');
            const noDataMessage = dayContainer.querySelector('.no-data');
            if (cardContainer.children.length === 0) {
                noDataMessage.classList.remove('hidden');
            }
        });
    </script>
</body>

</html>
