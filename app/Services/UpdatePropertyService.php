<?php


namespace App\Services;



use App\Models\Property;
use App\Repositories\PropertyRepository;
use App\Services\Dto\UpdatePropertyDto;
use App\Services\Interfaces\UpdatePropertyServiceInterface;

class UpdatePropertyService implements UpdatePropertyServiceInterface
{
    private $repository;

    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param UpdatePropertyDto $dto
     * @return \App\Repositories\Model
     */
    public function execute($id,UpdatePropertyDto $dto)
    {
        $property = $this->repository->findById($id);
        $property->line_1 = $dto->line_1;
        $property->line_2 = $dto->line_2;
        $property->number = $dto->number;
        $property->city = $dto->city;
        $property->state = $dto->state;
        $property->owner_email = $dto->owner_email;
        $property->save();
        return $property;
    }


}