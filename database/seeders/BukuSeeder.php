<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i > 10; $i++) {
            $faker = Faker::create();

            $buku = new Buku;
            $buku->isbn = rand(111111, 999999);
            $buku->judul = $faker->name;
            $buku->id_penerbit = rand(1, 8);
            $buku->id_pengarang = rand(1, 8);
            $buku->id_katalog = rand(1, 6);
            $buku->tahun = rand(2015, 2021);
            $buku->qty_stok = rand(5, 20);
            $buku->harga_pinjam = rand(5000, 20000);

            $buku->save();
        }
    }
}
