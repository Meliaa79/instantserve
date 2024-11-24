<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Hari Ini</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
</head>

@include('components.admin-navbar')

    <div class="flex">
@include('components.admin-sidebar')
        
<div class="ml-64 pt-20 w-full p-6">
    <div class="bg-white p-4 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Daftar Pesanan Hari Ini</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;">
                <h3 class="font-semibold">Caca</h3>
                <p><strong>Tanggal:</strong> 2024-10-20</p>
                <p><strong>Deskripsi:</strong> Cuci dan Setrika.</p>
            </div>
            <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;">
                <h3 class="font-semibold">Chadeva</h3>
                <p><strong>Tanggal:</strong> 2024-10-20</p>
                <p><strong>Deskripsi:</strong> Setrika.</p>
            </div>
            <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;">
                <h3 class="font-semibold">Dira</h3>
                <p><strong>Tanggal:</strong> 2024-10-20</p>
                <p><strong>Deskripsi:</strong> Setrika.</p>
            </div>
            <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;">
                <h3 class="font-semibold">Indira</h3>
                <p><strong>Tanggal:</strong> 2024-10-20</p>
                <p><strong>Deskripsi:</strong> Cuci dan Setrika.</p>
            </div>
            <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;">
                <h3 class="font-semibold">Janar</h3>
                <p><strong>Tanggal:</strong> 2024-10-20</p>
                <p><strong>Deskripsi:</strong> Cuci dan Setrika.</p>
            </div>
            <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;">
                <h3 class="font-semibold">Janardana</h3>
                <p><strong>Tanggal:</strong> 2024-10-20</p>
                <p><strong>Deskripsi:</strong> Setrika.</p>
            </div>
        </div>
        <div class="text-center mt-4 text-lg text-gray-500 hidden" id="no-data-message">
            Belum ada pesanan hari ini.
        </div>
    </div>
</div>


    <script>
        const dropdownBtns = document.querySelectorAll('.dropdown-btn');
        dropdownBtns.forEach(button => {
            button.addEventListener('click', function () {
                const dropdownContainer = this.nextElementSibling;
                dropdownContainer.classList.toggle('hidden');
            });
        });

        // Contoh untuk menampilkan pesan jika tidak ada pesanan
        const cardContainer = document.querySelector('.card-container');
        if (cardContainer.children.length === 0) {
            document.getElementById('no-data-message').classList.remove('hidden');
        }

        document.querySelector('.menu-active').classList.add('active');
    </script>
</body>
</html>