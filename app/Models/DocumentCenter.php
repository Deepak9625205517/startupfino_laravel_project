<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class DocumentCenter extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    protected $fillable = ['category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'pdf', 'file_extension', 'file_size', 'page', 'user_name', 'user_id', 'description', 'status', 'price', 'meta_title', 'meta_keywords', 'meta_description'];
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'document_name'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
    	return $this->belongsTo(Category::class, 'subcategory_id');
    }

    public function fevorite()
    {
    	return $this->hasOne(Favourite::class, 'document_center_id', 'id');
    }
}
