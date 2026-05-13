<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Roles extends Authenticatable
{
    protected $table = 'roles';

    protected $primaryKey = 'id_role';
    protected $fillable = ['role_name', 'slug'];
}