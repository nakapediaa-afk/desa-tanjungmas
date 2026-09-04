<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model {
    protected $fillable = ['total_penduduk', 'kepala_keluarga', 'laki_laki', 'perempuan', 'rt', 'rw', 'dusun', 'luas_wilayah'];
}
