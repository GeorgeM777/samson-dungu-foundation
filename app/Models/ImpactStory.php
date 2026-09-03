<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImpactStory extends Model
{
    protected $fillable = ['title', 'description', 'image', 'link', 'order', 'is_active'];
}
