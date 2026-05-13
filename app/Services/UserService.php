<?php

namespace App\Services;

use App\DTOs\UserDTO;
use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        $users = User::all();
        return $users->map(fn($user) => UserDTO::fromModel($user));
    }
}