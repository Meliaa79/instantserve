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
        // This method will be called when the migration is run
        Schema::dropIfExists('users'); // Drop the users table if it exists
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // This method will be called when the migration is rolled back
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Create an auto-incrementing primary key
            $table->string('full_name'); // Example of adding the full_name column
            $table->string('username')->unique(); // Ensure usernames are unique
            $table->string('email')->unique(); // Ensure emails are unique
            $table->string('password'); // Add password column
            $table->timestamps(); // Create created_at and updated_at columns
        });
    }
};
