<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penduduk_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id')->references('id')->on('penduduks')->onDelete('cascade');
            $table->foreignId('kegiatan_id')->references('id')->on('kegiatan_desas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_kegiatans');
    }
};
