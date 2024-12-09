<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Azzam',
            'email' => 'azzam.rpl22@gmail.com',
            'password' => Hash::make('endomitomaminaminokubosuzuki123'), // Password default
            'role' => 'admin', // Pastikan role admin
        ]);
    }
}
