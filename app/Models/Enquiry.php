<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['document_center_id', 'name', 'mobile', 'email', 'subject', 'status', 'description'];

    public function documentCenter()
    {
    	return $this->belongsTo(DocumentCenter::class);
    }
}
