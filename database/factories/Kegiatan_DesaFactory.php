<?php

namespace Database\Factories;

use App\Models\fasilitas_desa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kegiatan_desa>
 */
class Kegiatan_DesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->randomElement(['besih2','rewang','kerjabakti', 'rapat', 'iring manten']),
            'tanggal_pelaksanaan'=> fake()->date(),
            'deskripsi'=>fake()->paragraph(),
            'gambar'=> fake()->url(),
            'tempat_id'=> fasilitas_desa::all()->random()->id,
        ];
    }
}
