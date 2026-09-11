<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('kategori')->default('Kuliner')->index();
            $table->decimal('harga', 15, 2)->default(0);
            $table->string('penjual');
            $table->string('telepon')->nullable();
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->timestamps();
            
            $table->index('created_at');
        });
    }

    public function down(): void {
        Schema::dropIfExists('umkms');
    }
};
