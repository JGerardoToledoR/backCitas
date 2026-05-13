<?php
namespace App\Services;

use App\DTOs\BusinessesDTO;
use App\Models\Businesses;

class BusinessService
{
    public function getAllBusinesses()
    {

        $busines = Businesses::all();
        return $busines->map(fn($business) => BusinessesDTO::fromModel($business));
    }
}