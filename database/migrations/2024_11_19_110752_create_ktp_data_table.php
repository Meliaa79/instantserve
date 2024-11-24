<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ktp_data', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('full_name');
            $table->string('address');
            $table->date('dob');
            $table->string('ktp_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ktp_data');
    }
};
