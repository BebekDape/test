<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // --- Tempat manggil seeder lo ---
        // Tinggal tambah seeder lo di array ini:
        // Contoh:
        // UserSeeder::class,
        // RoleSeeder::class,
        // ProductSeeder::class,

        $this->call([
            // Tambahkan seeder lo di sini
        ]);
    }
}