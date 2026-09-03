<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadershipTeam extends Model
{
    protected $table = 'leadership_team';
    protected $fillable = ['name', 'position', 'phone', 'email', 'bio', 'photo', 'order', 'is_active'];
}
