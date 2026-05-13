<?php

namespace App\DTOs;

use App\Models\Businesses;

class BusinessesDTO
{
    public function __construct(
        public int $id,
        public string $busines_name,
        public string $slug,
        public string $category,
        public string $email,
        public string $phone,
        public string $address,
        public string $logo_path,
        public int $is_active,
        public array $config
    ) {
    }

    public static function fromModel(Businesses $businesses): self
    {

        return new self(
            $businesses->id_business,
            $businesses->busines_name,
            $businesses->slug,
            $businesses->category,
            $businesses->email,
            $businesses->phone,
            $businesses->address,
            $businesses->logo_path,
            $businesses->is_active,
            $businesses->config
        );
    }
}