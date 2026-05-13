<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Businesses extends Authenticatable
{
    protected $table = 'businesses';
    protected $primaryKey = 'id_business';
    protected $fillable = ['busines_name', 'slug', 'category', 'email', 'phone', 'address', 'logo_path', 'is_active', 'config'];
}