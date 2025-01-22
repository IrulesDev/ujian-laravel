<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fasilitas_desa>
 */
class Fasilitas_DesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['balai desa','posyandu','Masjid','sekolah','pasar',];

        return [
            'nama' => fake()->name(),
            'jenis_fasilitas' =>fake()->randomElement($roles),
            'lokasi'=> fake()->address(),
            'gambar'=> fake()->url()
        ];
    }
}
