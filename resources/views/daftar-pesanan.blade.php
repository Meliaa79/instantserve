<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        .ml-50px {
            margin-left: 50px;
        }
    </style>
</head>
<body>

@include('components.admin-navbar')

<div class="flex">
    @include('components.admin-sidebar')
        
    <div class="ml-64 pt-20 w-full p-6">
        <!-- Pesanan Berdasarkan Rentang Tanggal -->
        <div class="bg-white p-4 rounded shadow-md mb-6">
            <h2 class="text-2xl font-semibold mb-4">Daftar Pesanan </h2>

            <!-- Rentang Tanggal -->
            <div class="mb-4">
                <label for="start-date" class="block text-sm font-semibold">Tanggal Mulai:</label>
                <input type="date" id="start-date" class="p-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="end-date" class="block text-sm font-semibold">Tanggal Selesai:</label>
                <input type="date" id="end-date" class="p-2 border border-gray-300 rounded-md">
            </div>

            <!-- Pesanan -->
            <div id="order-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Daftar Pesanan (Pesanan Hari Ini dan Minggu Ini) -->
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-20">
                    <h3 class="font-semibold">Caca</h3>
                    <p><strong>Tanggal:</strong> 2024-10-20</p>
                    <p><strong>Deskripsi:</strong> Cuci dan Setrika.</p>
                </div>
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-20">
                    <h3 class="font-semibold">Chadeva</h3>
                    <p><strong>Tanggal:</strong> 2024-10-20</p>
                    <p><strong>Deskripsi:</strong> Setrika.</p>
                </div>
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-20">
                    <h3 class="font-semibold">Dira</h3>
                    <p><strong>Tanggal:</strong> 2024-10-20</p>
                    <p><strong>Deskripsi:</strong> Setrika.</p>
                </div>
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-20">
                    <h3 class="font-semibold">Indira</h3>
                    <p><strong>Tanggal:</strong> 2024-10-20</p>
                    <p><strong>Deskripsi:</strong> Cuci dan Setrika.</p>
                </div>
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-20">
                    <h3 class="font-semibold">Janar</h3>
                    <p><strong>Tanggal:</strong> 2024-10-20</p>
                    <p><strong>Deskripsi:</strong> Cuci dan Setrika.</p>
                </div>
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-20">
                    <h3 class="font-semibold">Janardana</h3>
                    <p><strong>Tanggal:</strong> 2024-10-20</p>
                    <p><strong>Deskripsi:</strong> Setrika.</p>
                </div>

                <!-- Pesanan Minggu Ini -->
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-20">
                    <h3 class="font-semibold">Caca</h3>
                    <p><strong>Tanggal:</strong> 2024-10-14</p>
                    <p><strong>Deskripsi:</strong> Cuci dan Setrika</p>
                </div>
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-14">
                    <h3 class="font-semibold">Dira</h3>
                    <p><strong>Tanggal:</strong> 2024-10-14</p>
                    <p><strong>Deskripsi:</strong> Setrika</p>
                </div>
                <div class="card border border-gray-300 rounded p-4 hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #81D8D0;" data-date="2024-10-15">
                    <h3 class="font-semibold">Rama</h3>
                    <p><strong>Tanggal:</strong> 2024-10-15</p>
                    <p><strong>Deskripsi:</strong> Setrika</p>
                </div>
            </div>

            <!-- Pesan jika Tidak Ada Pesanan -->
            <div class="text-center mt-4 text-lg text-gray-500 hidden" id="no-data-message">
                Belum ada pesanan dalam rentang tanggal ini.
            </div>
        </div>
    </div>
</div>

<script>
    // Menambahkan fungsionalitas filter berdasarkan rentang tanggal
    document.getElementById('start-date').addEventListener('change', filterOrders);
    document.getElementById('end-date').addEventListener('change', filterOrders);

    function filterOrders() {
        const startDate = document.getElementById('start-date').value;
        const endDate = document.getElementById('end-date').value;
        const orders = document.querySelectorAll('.card, .card-b');
        const noDataMessage = document.getElementById('no-data-message');
        let foundOrders = false;

        // Pastikan tanggal dalam format yang dapat dibandingkan (YYYY-MM-DD)
        if (startDate && endDate) {
            orders.forEach(order => {
                const orderDate = order.getAttribute('data-date');

                if (orderDate >= startDate && orderDate <= endDate) {
                    order.style.display = 'block'; // Tampilkan jika dalam rentang
                    foundOrders = true;
                } else {
                    order.style.display = 'none'; // Sembunyikan jika tidak dalam rentang
                }
            });
        } else {
            orders.forEach(order => {
                order.style.display = 'block'; // Tampilkan semua jika tidak ada filter
                foundOrders = true;
            });
        }

        // Menampilkan pesan jika tidak ada pesanan dalam rentang tanggal
        if (!foundOrders) {
            noDataMessage.classList.remove('hidden');
        } else {
            noDataMessage.classList.add('hidden');
        }
    }
</script>
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
