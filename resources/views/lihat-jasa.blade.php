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
                    @forelse ($data as $item)
                    <div class="card bg-gray-100 p-4 border border-gray-200 rounded-lg shadow hover:shadow-lg transition duration-200">
                        <img src="{{ asset('storage/posts/' . $item->image_url) }}" alt="{{ $item->alt }}" class="w-full h-60 object-cover rounded-t-md mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $item->nama_layanan }}</h3>
                        <p class="text-gray-600">Kontak: <span class="font-medium">{{ $item->kontak }}</span></p>
                        <p class="text-gray-600">Waktu Pengerjaan: <span class="font-medium">{{ $item->waktu_pengerjaan }}</span></p>
                        <p class="text-gray-600">Deskripsi: {{ $item->deskripsi_layanan }}</p>
                        <a href="{{ route('post.edit', $item->id) }}" class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-semibold">Edit Jasa</a>
                    </div>
                    @empty
                    <div class="col-span-3 text-center text-gray-700">
                        <p>Tidak ada jasa tersedia</p>
                    </div>
                    @endforelse
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
