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
        /**
         * Panggil semua seeder yang lo punya di sini.
         * Contoh:
         * UserSeeder::class,
         * RoleSeeder::class,
         * ProductSeeder::class,
         */
        
        $this->call([
            // Contoh:
            // SiswaSeeder::class,
            // StaffSeeder::class,
            // KategoriSeeder::class,
            // BarangSeeder::class,
        ]);
    }
}