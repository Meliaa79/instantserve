<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <title>Pesanan Bulan Ini</title>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
@include('components.admin-navbar')

    <!-- Sidebar -->
    <div class="flex">
@include('components.admin-sidebar')

        <!-- Content -->
        <div class="ml-64 pt-20 w-full p-6">
            <div class="main-section">
                <h2 class="text-2xl font-bold mb-4">Pesanan Bulan Ini</h2>

                <!-- Kartu Ringkasan Pesanan -->
                <div class="card border border-gray-300 rounded-lg p-4 bg-gray-100 mb-6">
                    <h3 class="text-lg font-semibold">Ringkasan Pesanan Bulan Ini</h3>
                    <p>Total Pesanan: <strong>50</strong></p>
                    <p>Pesanan Selesai: <strong>30</strong></p>
                    <p>Pesanan Belum Selesai: <strong>20</strong></p>
                </div>

                <!-- Chart -->
                <div id="chart-bulan" class="border border-gray-300 rounded-lg p-4 bg-white"></div>

            </div>
        </div>
    </div>

    <script>
        // Script untuk menampilkan diagram penjualan bulan ini
        var options = {
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Pesanan',
                data: [5, 10, 15, 20] // Data pesanan per minggu
            }],
            xaxis: {
                categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
            },
            tooltip: {
                y: {
                    formatter: function (val, { seriesIndex, dataPointIndex }) {
                        // Menentukan tanggal berdasarkan minggu
                        let dateRanges = [
                            '1-7', // Minggu 1
                            '8-14', // Minggu 2
                            '15-21', // Minggu 3
                            '22-28'  // Minggu 4
                        ];
                        return `Pesanan: ${val}<br>Rentang Tanggal: ${dateRanges[dataPointIndex]}`;
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart-bulan"), options);
        chart.render();

        // Dropdown Toggle Script
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });
        }
    </script>

</body>

</html>
