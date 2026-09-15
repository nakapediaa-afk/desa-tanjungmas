<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landmark extends Model {
    protected $fillable = [
        'slug',
        'nama',
        'kategori',
        'latitude',
        'longitude',
        'deskripsi',
        'foto',
        'icon',
        'pin_class',
        'badge',
        'badge_bg',
        'badge_color',
        'meta',
        'urutan'
    ];

    protected $casts = [
        'meta' => 'array',
    ];
}
