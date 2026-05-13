<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RoleService;
use App\Support\ApiResponse;


class RoleController extends Controller
{
    public function __construct(
        protected RoleService $roleService
    ) {

    }

    public function index()
    {
        $role = $this->roleService->getAllRoles();
        return response()->json(ApiResponse::send('Roles', $role));
    }
}