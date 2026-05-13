<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\BusinessService;
use App\Support\ApiResponse;

class BusinessController extends Controller
{
    public function __construct(
        protected BusinessService $businessService
    ) {
    }
    public function index()
    {
        $business = $this->businessService->getAllBusinesses();
        return response()->json(ApiResponse::send('Businesses', $business));
    }
}