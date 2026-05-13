<?php

namespace App\Services;

use App\DTOs\RoleDTO;
use App\Models\Roles;

class RoleService
{
    public function getAllRoles()
    {
        $roles = Roles::all();
        return $roles->map(fn($roles) => RoleDTO::fromModel($roles));
    }
}