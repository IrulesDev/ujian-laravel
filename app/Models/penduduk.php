<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    /** @use HasFactory<\Database\Factories\PendudukFactory> */
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'tanggal_lahir',
        'jenis_kelamin',
        'keluarga_id',
        'kegiatan_id',
        'peran',
        'gambar',
    ];

    public function keluarga(){
        return $this->belongsTo(keluarga::class ,'kegiatan_id');
    }
    public function kegiatan_desa(){
        return $this->hasMany(kegiatan_desa::class);
    }
}
