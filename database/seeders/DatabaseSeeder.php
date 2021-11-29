<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Anggota::factory(20)->create();
        // Buku::factory(10)->create();
        // Penerbit::factory(8)->create();
        // Pengarang::factory(8)->create();
        // Katalog::factory(6)->create();

        $this->call(AnggotaSeeder::class);
        $this->call(BukuSeeder::class);
    }
}
