<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class data_poktanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'id_poktan' => $this->faker->randomNumber(5, true),
            'nama_poktan' => $this->faker->name(),
            'NIK' => $this->faker->randomNumber(5, true),
            'ketua' => $this->faker->firstName(),
            'alamat_sekretariat' => $this->faker->streetAddress() ,
            'kelurahan' => $this->faker->address(),
            'kecamatan' => $this->faker->city(),
            'verifikasi' => $this->faker->word(),
            'bantuan' => $this->faker->word(),
            'sumber_dana' => $this->faker->word(),
            'jenis_bantuan' => $this->faker->word(),
        ];
    }
}
