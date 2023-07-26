<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class reportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'poktan' => $this->faker->name(),
            'id_poktan' => $this->faker->randomNumber(5, true),
            'status' => $this->faker->word(),
            'kelurahan' => $this->faker->word(),
            'title' => $this->faker->word(),
            'kecamatan' => $this->faker->word(),
            'slug' => $this->faker->word(),
            'laporan' => $this->faker->paragraph(mt_rand(5,10)),
            'solusi' => $this->faker->paragraph(mt_rand(5,10)),
            'user_id' => mt_rand(1,4),
        ];
    }
}
