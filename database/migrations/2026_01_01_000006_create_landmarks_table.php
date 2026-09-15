<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('landmarks', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('nama');
            $table->string('kategori'); // pemerintahan, sarana, olahraga, kkn, umkm, alam
            $table->string('latitude');
            $table->string('longitude');
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->string('icon')->default('map-pin');
            $table->string('pin_class')->default('pin-dusun');
            $table->string('badge')->nullable();
            $table->string('badge_bg')->default('#dcfce7');
            $table->string('badge_color')->default('#15803d');
            $table->text('meta')->nullable();
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('landmarks');
    }
};
