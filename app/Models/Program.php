<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['title', 'icon', 'short_description', 'image', 'bullets', 'stats', 'order', 'is_active'];

    protected $casts = [
        'bullets' => 'array',
        'stats' => 'array',
        'is_active' => 'boolean',
    ];
}
