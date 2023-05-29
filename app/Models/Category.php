<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['parent_id', 'name', 'slug', 'status', 'description', 'short_description', 'long_description', 'sidebar_description', 'meta_title', 'meta_keywords', 'meta_description'];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function childs()
    {
    	return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
    	return $this->belongsTo(Category::class, 'parent_id');
    }

    public function subcategory()
    {
    	return $this->hasMany(Category::class, 'parent_id');
    }

    public function documetCenters()
    {
    	return $this->hasMany(DocumentCenter::class)->where('status','=', 1);
    }
}
