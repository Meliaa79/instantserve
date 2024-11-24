<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Lihat Jasa</title>
</head>

<body class="bg-gray-100 font-sans">

    @include('components.admin-navbar')

    <div class="flex">
        @include('components.admin-sidebar')

        <div class="ml-64 pt-20 w-full p-6">
            <div class="main-section bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-700">Daftar Jasa</h2>


                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="card bg-gray-100 p-4 border border-gray-200 rounded-lg shadow hover:shadow-lg transition duration-200">
                        <img src="{{ asset('images\kisspng-laundry-washing-machines-clothes-dryer-laundry-5abb444b924d96.8925375715222221555993-removebg-preview.png') }}"
                            alt="Cuci" class="w-full h-60 object-cover rounded-t-md mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Cuci</h3>
                        <p class="text-gray-600">Kontak: <span class="font-medium">0812-3456-7890</span></p>
                        <p class="text-gray-600">Waktu Pengerjaan: <span class="font-medium">2 Hari</span></p>
                        <p class="text-gray-600">Deskripsi: Jasa cuci bersih untuk semua jenis pakaian.</p>
                        <a href="/edit-jasa"
                            class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-semibold">Edit Jasa</a>
                    </div>

                    <div
                        class="card bg-gray-100 p-4 border border-gray-200 rounded-lg shadow hover:shadow-lg transition duration-200">
                        <img src="{{ asset('images\Ilustrasi-setrika.jpg') }}" alt="Setrika"
                            class="w-full h-60 object-cover rounded-t-md mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Setrika</h3>
                        <p class="text-gray-600">Kontak: <span class="font-medium">0812-3456-7890</span></p>
                        <p class="text-gray-600">Waktu Pengerjaan: <span class="font-medium">1 Hari</span></p>
                        <p class="text-gray-600">Deskripsi: Jasa setrika rapi untuk pakaian agar siap dipakai.</p>
                        <a href="/edit-jasa"
                            class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-semibold">Edit Jasa</a>
                    </div>

                    <div
                        class="card bg-gray-100 p-4 border border-gray-200 rounded-lg shadow hover:shadow-lg transition duration-200">
                        <img src="{{ asset('images\1682694358157-removebg-preview.png') }}" alt="Cuci dan Setrika"
                            class="w-full h-60 object-cover rounded-t-md mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Cuci dan Setrika</h3>
                        <p class="text-gray-600">Kontak: <span class="font-medium">0812-3456-7890</span></p>
                        <p class="text-gray-600">Waktu Pengerjaan: <span class="font-medium">3 Hari</span></p>
                        <p class="text-gray-600">Deskripsi: Kombinasi layanan cuci dan setrika untuk kemudahan Anda.</p>
                        <a href="/edit-jasa"
                            class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-semibold">Edit Jasa</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<script>
    document.querySelectorAll('.dropdown-btn').forEach(button => {
        button.addEventListener('click', () => {
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('hidden');
        });
    });
</script>

</html>