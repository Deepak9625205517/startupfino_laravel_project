<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'page_id',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'deleted_at',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
