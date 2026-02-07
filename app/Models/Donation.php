<?php
// app/Models/Donation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_code',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'amount',
        'currency',
        'payment_method',
        'transaction_id',
        'designation',
        'frequency',
        'status',
        'notes',
        'message',
        'completed_at',
        'contacted_at',
        'confirmed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'completed_at' => 'datetime',
        'contacted_at' => 'datetime',
        'confirmed_at' => 'datetime'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($donation) {
            // Generate unique reference code if not set
            if (empty($donation->reference_code)) {
                $donation->reference_code = 'SDF-' . strtoupper(uniqid());
            }
        });
    }

    // Get full name
    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    // Format amount with currency
    public function getFormattedAmountAttribute()
    {
        $symbols = [
            'USD' => '$',
            'UGX' => 'UGX ',
            'GBP' => '£',
            'EUR' => '€',
        ];

        $symbol = $symbols[$this->currency] ?? $this->currency . ' ';
        return $symbol . number_format($this->amount, 2);
    }

    // Get readable payment method
    public function getPaymentMethodReadableAttribute()
    {
        $methods = [
            'bank_ugx' => 'Bank Transfer (UGX)',
            'bank_usd' => 'Bank Transfer (USD)',
            'mobile_money' => 'Mobile Money',
            'cash' => 'Cash Deposit',
            'card' => 'Credit/Debit Card',
        ];

        return $methods[$this->payment_method] ?? ucfirst(str_replace('_', ' ', $this->payment_method));
    }

    // Get readable designation
    public function getDesignationReadableAttribute()
    {
        $designations = [
            'general' => 'General Fund',
            'general_fund' => 'General Fund (Where most needed)',
            'land_project' => 'Land Acquisition Project',
            'child_sponsorship' => 'Child Sponsorship Program',
            'medical_support' => 'Medical Support',
            'vocational_training' => 'Vocational Training',
            'special_needs' => 'Special Needs Support',
            'elderly_care' => 'Elderly Care Program',
            'education' => 'Education Support',
        ];

        return $designations[$this->designation] ?? ucfirst(str_replace('_', ' ', $this->designation));
    }

    // Get readable status
    public function getStatusReadableAttribute()
    {
        $statuses = [
            'pending' => 'Awaiting Contact',
            'contacted' => 'Contact Made',
            'confirmed' => 'Payment Confirmed',
            'completed' => 'Processed',
            'cancelled' => 'Cancelled',
        ];

        return $statuses[$this->status] ?? ucfirst($this->status);
    }

    // Get readable frequency
    public function getFrequencyReadableAttribute()
    {
        $frequencies = [
            'one_time' => 'One-time',
            'one-time' => 'One-time',
            'monthly' => 'Monthly',
            'quarterly' => 'Quarterly',
            'yearly' => 'Yearly',
        ];

        return $frequencies[$this->frequency] ?? ucfirst($this->frequency);
    }
}
