<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pengarang' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telp' => $this->faker->PhoneNumber,
            'alamat' => $this->faker->address(),
        ];
    }
}
