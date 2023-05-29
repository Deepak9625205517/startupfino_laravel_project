<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'document_center_id', 'like'];

    function DocumentCenter()
    {
        return $this->belongsTo(DocumentCenter::class, 'document_center_id', 'id');
    }
}
