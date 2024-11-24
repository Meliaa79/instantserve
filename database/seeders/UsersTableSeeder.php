<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan satu pengguna
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password123'), // Pastikan untuk menggunakan bcrypt
        ]);

        // Menambahkan beberapa pengguna sekaligus
        DB::table('users')->insert([
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'password' => Hash::make('password456'),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'password' => Hash::make('password789'),
            ],
        ]);
    }
}
