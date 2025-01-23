<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk_kegiatan extends Model
{
    /** @use HasFactory<\Database\Factories\PendudukKegiatanFactory> */
    use HasFactory;

    // protected $fillable = [
    //     'penduduk_id',
    //     'kegiatan_id'
    // ];
    // public function penduduk(){
    //     return $this->belongsTo(penduduk::class);
    // }
    // public function kegiatan_desa(){
    //     return $this->belongsTo(kegiatan_desa::class);
    // }
}
