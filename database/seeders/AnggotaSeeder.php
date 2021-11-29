<?php

namespace Database\Seeders;

use App\models\Anggota;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
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

            $anggota = new Anggota;
            $anggota->nama = $faker->name;
            $anggota->sex = rand('L', 'P');
            $anggota->telp = $faker->phoneNumber;
            $anggota->alamat = $faker->address;
            $anggota->email = $faker->safeEmail;

            $anggota->save();
        }
    }
}
