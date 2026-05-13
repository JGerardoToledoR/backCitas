<?php

namespace App\DTOs;

use App\Models\Roles;

class RoleDTO
{
    public function __construct(
        public int $id,
        public string $role_name,
        public string $slug
    ) {
    }

    public static function fromModel(Roles $roles): self
    {
        return new self(
            $roles->id_role,
            $roles->role_name,
            $roles->slug
        );
    }
}