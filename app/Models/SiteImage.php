<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteImage extends Model
{
    protected $fillable = ['key', 'image', 'label', 'description', 'group'];

    public static function get($key, $default = null)
    {
        $image = self::where('key', $key)->first();
        return $image ? $image->image : $default;
    }
}
