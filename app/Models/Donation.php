<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference', 'amount', 'currency', 'email', 'name', 'phone',
        'frequency', 'designation', 'status', 'transaction_id',
        'payment_method', 'notes', 'completed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'completed_at' => 'datetime'
    ];
}
