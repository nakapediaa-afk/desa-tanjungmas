<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('kategori')->default('Umum')->index();
            $table->string('penulis')->default('Pemerintah Desa');
            $table->text('ringkasan');
            $table->longText('isi');
            $table->string('gambar')->nullable();
            $table->timestamps();
            
            $table->index('created_at');
        });
    }

    public function down(): void {
        Schema::dropIfExists('beritas');
    }
};
