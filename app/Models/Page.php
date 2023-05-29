<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory, Sluggable, SoftDeletes;
    
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'description',
        'short_description',
        'long_description',
        'status',
    ];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
