<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Support\ApiResponse;

class UserController extends Controller
{

    public function __construct(
        protected UserService $userService
    ) {
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return response()->json(ApiResponse::send('Usuarios', $users));
    }
}