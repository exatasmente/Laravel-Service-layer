<?php

namespace App\Services;


use App\Models\Property;
use App\Services\Dto\CreatePropertyDto;
use App\Services\Interfaces\CreatePropertyServiceInterface;

class CreatePropertyService implements CreatePropertyServiceInterface
{
    /**
     * @param CreatePropertyDto $dto
     * @return bool
     */
    public function execute(CreatePropertyDto  $dto)
    {
        $property = new Property();
        $property->owner_email = $dto->owner_email;
        $property->line_1 = $dto->line_1;
        $property->line_2 = $dto->line_2;
        $property->number = $dto->number;
        $property->city = $dto->city;
        $property->state = $dto->state;
        $property->borough = $dto->borough;
        $property->save();
        return $property;
    }



}