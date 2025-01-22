<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluarga extends Model
{
    /** @use HasFactory<\Database\Factories\KeluargaFactory> */
    use HasFactory;
    protected $fillable = [
        'no_kk',
        'alamat',
        // 'kepala_keluarga_id',
    ];
    // public function kepalaKeluarga(){
    //     return $this-> hasOne(kepala_keluarga::class,'kepala_keluarga_id');
    // }
    public function penduduk(){
        return $this->hasMany(penduduk::class,);
    }
}
