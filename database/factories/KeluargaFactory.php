<?php

namespace Database\Factories;

use App\Models\kepala_keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keluarga>
 */
class KeluargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_kk'=>fake()->numerify('##########'),
            'alamat'=>fake()->address(),
            // 'kepala_keluarga'=> kepala_keluarga::factory()
        ];
    }
}
