<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SubscriptionCategory extends Pivot
{
    use HasFactory, SoftDeletes;
    protected $table = 'category_subscription';
    protected $fillable = [
        'subscription_id',
        'category_id',
    ];

    
}
