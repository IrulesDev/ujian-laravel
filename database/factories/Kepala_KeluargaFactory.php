<?php

namespace Database\Factories;

use App\Models\keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kepala_keluarga>
 */
class Kepala_KeluargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name,
            'keluarga_id' => keluarga::all()->random()->id,
            'nik' =>fake()->unique()->numerify('##########'),
            'tanggal_lahir' =>fake()->date,
        ];
    }
}
