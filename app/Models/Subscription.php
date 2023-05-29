<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'days',
        'type',
        'monthly',
        'price',
        'offers',
        // 'document_quantity',
        'status',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->using(SubscriptionCategory::class);
    }
}
