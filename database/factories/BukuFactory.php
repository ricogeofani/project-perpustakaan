<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isbn' => $this->faker->numerify('######'),
            'judul' => $this->faker->word(),
            'tahun' => $this->faker->year($max = 'now'),
            'qty_stok' => $this->faker->numberBetween($min = 5, $max = 100),
            'harga_pinjam' => $this->faker->numberBetween($min = 5000, $max = 50000)
        ];
    }
}
