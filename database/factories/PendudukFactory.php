<?php

namespace Database\Factories;

use App\Models\keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rolesPeran = ['anak', 'istri','kepala keluarga'];
        $rolesJenisKelamin = ['L', 'P'];
        
        return [
            'nama' =>fake()->name(),
            'nik' =>fake()->unique()->numerify('#############'),
            'tanggal_lahir' =>fake()->date(),
            'jenis_kelamin' =>fake()->randomElement($rolesJenisKelamin),
            // 'keluarga_id' => keluarga::factory(),
            'peran' => fake()->randomElement($rolesPeran),
            'gambar' =>fake()->url(),
        ];
    }
}
