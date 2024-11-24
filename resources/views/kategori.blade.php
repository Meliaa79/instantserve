<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kategori</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Purple+Purse:wght@400&display=swap" />
    <!-- Menggunakan asset() untuk mengakses file CSS di folder public -->
    <link rel="stylesheet" href="{{ asset('css/kategori.css') }}" />
  </head>
  <body>
    <div class="main-container">
      <span class="kategori-1">KATEGORI</span>
      <form action="{{ route('kategori.submit') }}" method="POST">
        @csrf
        <div class="rectangle">
          <div class="flex-row">
            <button type="submit" name="kategori" value="UMKM" class="rectangle-2"><span class="umkm">UMKM</span></button>
            <button type="submit" name="kategori" value="Mahasiswa" class="rectangle-3">
              <span class="mahasiswa">Mahasiswa</span>
            </button>
            <button type="submit" name="kategori" value="Anak Kos" class="rectangle-4">
              <span class="anak-kos">Anak Kos</span>
            </button>
            <button type="submit" name="kategori" value="Rumah Sakit" class="rectangle-button">
              <span class="rumah-sakit-span">Rumah <br />Sakit</span>
            </button>
          </div>
          <div class="flex-row-db">
            <button type="submit" name="kategori" value="Sekolah" class="rectangle-button-5">
              <span class="sekolah-span">Sekolah</span>
            </button>
            <button type="submit" name="kategori" value="Freelancer" class="rectangle-button-6">
              <span class="freelancer-span">Freelancer</span>
            </button>
            <button type="submit" name="kategori" value="Rumah Tangga" class="rectangle-button-7">
              <span class="rumah-tangga-span">Rumah <br />Tangga</span>
            </button>
            <button type="submit" name="kategori" value="Lainnya" class="rectangle-button-8">
              <span class="lainnya">Lainnya...</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
