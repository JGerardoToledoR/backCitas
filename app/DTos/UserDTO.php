<?php

namespace App\DTOs;

use App\Models\User;

class UserDTO
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
        public string $phone,
    ) {
    }

    public static function fromModel(User $user): self
    {
        return new self(
            $user->id_user,
            $user->username,
            $user->email,
            $user->phone
        );
    }
}