<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('apbdes', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['pendapatan', 'belanja'])->index();
            $table->string('nama_pos');
            $table->bigInteger('jumlah');
            $table->integer('persen')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('apbdes');
    }
};
