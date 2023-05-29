<?php
  
namespace App\Models;
  
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
  
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, SoftDeletes;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile_number',
        'is_admin',
        'url',
        'company_name',
        'company_contact_number',
        'company_contact_email',
        'website_url',
        'address1',
        'address2',
        'state_id',
        'city',
        'postal_code',
        'no_of_employees',
        'business_priority',
        'refferal_code',
        'reference_by',
    ];
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
  
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}