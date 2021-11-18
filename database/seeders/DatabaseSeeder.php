<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Katalog;
use App\Models\Penerbit;
use App\Models\Pengarang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Anggota::factory(20)->create();
        Buku::factory(25)->create();
        Penerbit::factory(8)->create();
        Pengarang::factory(8)->create();
        Katalog::factory(6)->create();
    }
}
