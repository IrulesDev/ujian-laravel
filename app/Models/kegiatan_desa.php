<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan_desa extends Model
{
    /** @use HasFactory<\Database\Factories\KegiatanDesaFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'tanggal_pelaksanaan',
        'deskripsi',
        'gambar'
    ];

    public function penduduk1(){
        return $this->hasOne(penduduk_kegiatan::class,'penduduk_kegiatan');
    }
    public function tempat(){
        return $this->hasOne(fasilitas_desa::class, 'tempat_id');
    }
    // public function penduduk(){
    //     return $this->belongsTo(penduduk::class);
    // }
}
