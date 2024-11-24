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
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->nullable();
        $table->enum('gender', ['male', 'female', 'other'])->nullable();
        $table->date('dob')->nullable();
        $table->string('profile_picture')->nullable(); // Store the path to the profile picture
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['phone', 'gender', 'dob', 'profile_picture']);
    });
}

};
