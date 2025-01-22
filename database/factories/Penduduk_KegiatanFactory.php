<?php

namespace Database\Factories;

use App\Models\kegiatan_desa;
use App\Models\penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penduduk_kegiatan>
 */
class penduduk_kegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penduduk_id'=> penduduk::all()->random()->id,
            'kegiatan_id'=> kegiatan_desa::all()->random()->id,
        ];

    }
}
