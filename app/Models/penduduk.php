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
        'peran',
        'gambar',
    ];

    public function keluarga(){
        return $this->belongsTo(keluarga::class );
    }
    public function penduduk_kegiatan(){
        return $this->hasMany(penduduk_kegiatan::class);
    }
    // public function kegiatan(){
    //     return $this->hasOne(kegiatan_desa::class);
    // }
}
