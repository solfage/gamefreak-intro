<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'version',
        'target_version',
        'is_enabled',
        'manifest',
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
        'manifest' => 'array',
    ];
}
