<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Minggu Ini</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .ml-50px {
            margin-left: 50px;
        }
    </style>
</head>
<body>

@include('components.admin-navbar')

<div class="flex pt-16">
        @include('components.admin-sidebar')

        <div class="ml-64 pt-10 w-full p-6">
            <div class="main-section">
                <div class="section p-4 bg-gray-100 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4">Daftar Pesanan Minggu Ini</h2>

                    <!-- Hari Senin -->
                    <div class="day-container mb-4">
                        <div class="day-header text-xl font-semibold mb-2">Senin</div>
                        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="card-b bg-white p-4 border border-gray-300 rounded-lg shadow-sm">
                                <h3 class="font-semibold">Caca</h3>
                                <p><strong>Tanggal:</strong> 2024-10-14</p>
                                <p><strong>Deskripsi:</strong> Cuci dan Setrika</p>
                                <p><strong>No Telepon:</strong> 081238278881</p>
                                <div class="status-container flex space-x-2 mt-2">
                                    <div class="status bg-green-100 text-green-800 px-2 py-1 rounded">Selesai</div>
                                    <div class="status not-picked-up bg-yellow-100 text-yellow-800 px-2 py-1 rounded">Belum diambil</div>
                                </div>
                            </div>
                            <div class="card-b bg-white p-4 border border-gray-300 rounded-lg shadow-sm">
                                <h3 class="font-semibold">Dira</h3>
                                <p><strong>Tanggal:</strong> 2024-10-14</p>
                                <p><strong>Deskripsi:</strong> Setrika</p>
                                <p><strong>No Telepon:</strong> 081238278883</p>
                                <div class="status-container flex space-x-2 mt-2">
                                    <div class="status bg-green-100 text-green-800 px-2 py-1 rounded">Selesai</div>
                                    <div class="status picked-up bg-blue-100 text-blue-800 px-2 py-1 rounded">Sudah diambil</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hari Selasa -->
                    <div class="day-container mb-4">
                        <div class="day-header text-xl font-semibold mb-2">Selasa</div>
                        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="card-b bg-white p-4 border border-gray-300 rounded-lg shadow-sm">
                                <h3 class="font-semibold">Tugus</h3>
                                <p><strong>Tanggal:</strong> 2024-10-15</p>
                                <p><strong>Deskripsi:</strong> Cuci dan Setrika</p>
                                <p><strong>No Telepon:</strong> 081238278889</p>
                                <div class="status-container flex space-x-2 mt-2">
                                    <div class="status bg-green-100 text-green-800 px-2 py-1 rounded">Selesai</div>
                                    <div class="status picked-up bg-blue-100 text-blue-800 px-2 py-1 rounded">Sudah diambil</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hari Rabu -->
                    <div class="day-container mb-4">
                        <div class="day-header text-xl font-semibold mb-2">Rabu</div>
                        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="card-b bg-white p-4 border border-gray-300 rounded-lg shadow-sm">
                                <h3 class="font-semibold">Karin</h3>
                                <p><strong>Tanggal:</strong> 2024-10-16</p>
                                <p><strong>Deskripsi:</strong> Cuci dan Setrika</p>
                                <p><strong>No Telepon:</strong> 081238278890</p>
                                <div class="status-container flex space-x-2 mt-2">
                                    <div class="status bg-green-100 text-green-800 px-2 py-1 rounded">Selesai</div>
                                    <div class="status picked-up bg-blue-100 text-blue-800 px-2 py-1 rounded">Sudah diambil</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hari Kamis -->
                    <div class="day-container mb-4">
                        <div class="day-header text-xl font-semibold mb-2">Kamis</div>
                        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="card-b bg-white p-4 border border-gray-300 rounded-lg shadow-sm">
                                <h3 class="font-semibold">Ale</h3>
                                <p><strong>Tanggal:</strong> 2024-10-17</p>
                                <p><strong>Deskripsi:</strong> Setrika</p>
                                <p><strong>No Telepon:</strong> 081238278891</p>
                                <div class="status-container flex space-x-2 mt-2">
                                    <div class="status bg-green-100 text-green-800 px-2 py-1 rounded">Selesai</div>
                                    <div class="status picked-up bg-blue-100 text-blue-800 px-2 py-1 rounded">Sudah diambil</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hari Jumat -->
                    <div class="day-container mb-4">
                        <div class="day-header text-xl font-semibold mb-2">Jumat</div>
                        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="card-b bg-white p-4 border border-gray-300 rounded-lg shadow-sm">
                                <h3 class="font-semibold">Arya</h3>
                                <p><strong>Tanggal:</strong> 2024-10-18</p>
                                <p><strong>Deskripsi:</strong> Cuci dan Setrika</p>
                                <p><strong>No Telepon:</strong> 081238278824</p>
                                <div class="status-container flex space-x-2 mt-2">
                                    <div class="status bg-green-100 text-green-800 px-2 py-1 rounded">Selesai</div>
                                    <div class="status picked-up bg-blue-100 text-blue-800 px-2 py-1 rounded">Sudah diambil</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hari Sabtu -->
                    <div class="day-container mb-4">
                        <div class="day-header text-xl font-semibold mb-2">Sabtu</div>
                        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-4">
                        </div>
                        <div class="no-data text-gray-500 mt-2">Tidak ada pesanan pada hari Sabtu.</div>
                    </div>

                    <!-- Hari Minggu -->
                    <div class="day-container mb-4">
                        <div class="day-header text-xl font-semibold mb-2">Minggu</div>
                        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="card-b bg-white p-4 border border-gray-300 rounded-lg shadow-sm">
                                <h3 class="font-semibold">Caca</h3>
                                <p><strong>Tanggal:</strong> 2024-10-20</p>
                                <p><strong>Deskripsi:</strong> Cuci dan Setrika</p>
                                <p><strong>No Telepon:</strong> 081238278881</p>
                                <div class="status-container flex space-x-2 mt-2">
                                    <div class="status not-done bg-red-100 text-red-800 px-2 py-1 rounded">Belum Selesai</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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