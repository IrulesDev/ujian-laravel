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
        'tempat_id',
        'gambar'
    ];

    public function penduduk(){
        return $this->belongsToMany(penduduk::class);
    }
    public function tempat(){
        return $this->hasMany(fasilitas_desa::class, 'tempat_id');
    }
    // public function penduduk(){
    //     return $this->belongsTo(penduduk::class);
    // }
}
