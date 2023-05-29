<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'subscription_id',
        'subscription_date',
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'state_id',
        'city_id',
        'price',
        'subscription_type',
        'transaction_id',
        'transaction_status',
        'payment_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}

