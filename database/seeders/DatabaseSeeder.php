<?php

namespace Database\Seeders;

use App\Models\fasilitas_desa;
use App\Models\kegiatan_desa;
use App\Models\keluarga;
use App\Models\kepala_keluarga;
use App\Models\penduduk;
use App\Models\penduduk_kegiatan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(){
        
        
        // User::factory(11)->create();
        fasilitas_desa::factory(100)->create();
        
        $keluargas = Keluarga::factory(100)->create();
        foreach ($keluargas as $keluarga) {
            Penduduk::factory(3)->create([
                'keluarga_id' => $keluarga->id,
            ]);
            
            // // Buat 1 kepala keluarga
            // Kepala_Keluarga::factory()->create([
            //     'keluarga_id' => $keluarga->id,
            // ]);
        }
        Kegiatan_Desa::factory(200)->create();
        penduduk_kegiatan::factory(200)->create();
            
            





//         $keluargas = Keluarga::factory(5)->create();

//         // Persiapkan data untuk batch insert
//         $pendudukData = [];
//         $kepalaKeluargaData = [];

//         foreach ($keluargas as $keluarga) {
//             // Tambahkan 3 penduduk untuk setiap keluarga
//             for ($i = 0; $i < 3; $i++) {
//                 $pendudukData[] = [
//                     'keluarga_id' => $keluarga->id,
//                     'nama' => fake()->name(),
//                     'created_at' => now(),
//                     'updated_at' => now(),
//                 ];
//             }

//             // Tambahkan 1 kepala keluarga untuk setiap keluarga
//             $kepalaKeluargaData[] = [
//                 'keluarga_id' => $keluarga->id,
//                 'nama' => fake()->name(),
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ];
//         }

//         // Batch insert penduduk dan kepala keluarga
//         Penduduk::insert($pendudukData);
//         Kepala_Keluarga::insert($kepalaKeluargaData);

//         // Buat 100 fasilitas desa sekaligus
//         Fasilitas_Desa::factory(100)->create();

//         // Buat 20 kegiatan desa sekaligus
//         Kegiatan_Desa::factory(20)->create();
        }
}