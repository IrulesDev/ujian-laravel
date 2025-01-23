<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas_desa extends Model
{
    /** @use HasFactory<\Database\Factories\FasilitasDesaFactory> */
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis_fasilitas',
        'lokasi',
        'gambar',
    ] ;
    public function Kegitan_desa(){
        return $this->belongsToMany( kegiatan_desa::class,'tempat_id',);
    }
}
