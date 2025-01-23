<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepala_keluarga extends Model
{
    /** @use HasFactory<\Database\Factories\KepalaKeluargaFactory> */
    use HasFactory;
    protected $fillable = [
        'keluarga_id',
        'nama',
        'nik',
        'tanggal_lahir',
    ];
    public function keluarga(){
        return $this->belongsTo(keluarga::class);
    }
}
