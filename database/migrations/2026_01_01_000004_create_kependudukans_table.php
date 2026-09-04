<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('kependudukans', function (Blueprint $table) {
            $table->id();
            $table->integer('total_penduduk');
            $table->integer('kepala_keluarga');
            $table->integer('laki_laki');
            $table->integer('perempuan');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('dusun');
            $table->string('luas_wilayah');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('kependudukans');
    }
};
