<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            $table->longText('deskripsi_layanan');
            $table->string('alamat');
            $table->enum('kategori', ['UMKM', 'Sekolah', 'Rumah Tangga', 'Pengangkutan'])->default('UMKM');
            $table->string('kontak');
            $table->string('image_url');
            $table->string('alt');
            $table->foreignId('user_id')->constrained()->references('id')->on('users');; 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
