<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Edit Jasa</title>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
   @include('components.admin-navbar')

    <!-- Sidebar dan Konten Utama -->
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen p-4">
            @include('components.admin-sidebar')
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 p-6">
            <h2 class="text-2xl font-bold mb-6">Edit Jasa</h2>
        
            <!-- Edit Form -->
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- This is important for updating the resource -->
                
                <!-- Nama Layanan -->
                <div class="mb-4">
                    <label for="nama_layanan" class="block text-sm font-medium text-gray-700">Nama Layanan:</label>
                    <input type="text" id="nama_layanan" name="nama_layanan" value="{{ old('nama_layanan', $post->nama_layanan) }}" placeholder="Masukkan nama layanan" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('nama_layanan')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <!-- Kontak -->
                <div class="mb-4">
                    <label for="kontak" class="block text-sm font-medium text-gray-700">Kontak:</label>
                    <input type="text" id="kontak" name="kontak" value="{{ old('kontak', $post->kontak) }}" placeholder="Masukkan kontak" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('kontak')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $post->alamat) }}" placeholder="Masukkan alamat" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('alamat')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <!-- Kategori -->
                <div class="mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori:</label>
                    <select id="kategori" name="kategori" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="UMKM" {{ old('kategori', $post->kategori) == 'UMKM' ? 'selected' : '' }}>UMKM</option>
                        <option value="Sekolah" {{ old('kategori', $post->kategori) == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>
                        <option value="Rumah Tangga" {{ old('kategori', $post->kategori) == 'Rumah Tangga' ? 'selected' : '' }}>Rumah Tangga</option>
                        <option value="Pengangkutan" {{ old('kategori', $post->kategori) == 'Pengangkutan' ? 'selected' : '' }}>Pengangkutan</option>
                    </select>
                    @error('kategori')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <!-- Deskripsi Layanan -->
                <div class="mb-6">
                    <label for="deskripsi_layanan" class="block text-sm font-medium text-gray-700">Deskripsi Layanan:</label>
                    <textarea id="deskripsi_layanan" name="deskripsi_layanan" rows="4" placeholder="Deskripsi layanan..." required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi_layanan', $post->deskripsi_layanan) }}</textarea>
                    @error('deskripsi_layanan')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <!-- Foto Jasa (Optional to change) -->
                <div class="mb-6">
                    <label for="image_url" class="block text-sm font-medium text-gray-700">Upload Foto Jasa:</label>
                    <input type="file" id="image_url" name="image_url" accept="image/*" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <p class="text-sm text-gray-500 mt-1">Unggah gambar dalam format JPG, PNG, atau JPEG. Maksimal ukuran file 2MB.</p>
                    @if($post->image_url)
                        <div class="mt-2">
                            <img src="{{ asset('storage/posts/' . $post->image_url) }}" alt="Current Image" class="w-32 h-32 object-cover rounded-md">
                        </div>
                    @endif
                    @error('image_url')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <button type="submit" class="w-full text-white py-2 px-4 rounded-md bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Update Jasa</button>
            </form>
        </div>
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
