<?php

use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/roles', [RoleController::class, 'index']);