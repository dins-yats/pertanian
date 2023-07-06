<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [


  // User::create([
        //     'password' => bcrypt('12345'),
        //     'id_poktan' => '1001391',
        //     'nama_poktan' => 'mekar jaya',
        //     'NIK' => '000144766912',
        //     'ketua' => 'hayatudin',
        //     'alamat_sekretariat' => 'jalan sekayu',
        //     'kelurahan' => 'serasan jaya',
        //     'kecamatan' => 'sekayu',
        //     'verifikasi' => 'sudah',
        //     'bantuan' => 'sudah',
        //     'sumber_dana' => 'APBD',
        //     'jenis_bantuan' => 'PUPUK',
        // ]);
            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
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
            'remember_token' => Str::random(10),
            
            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }
}
