<?php

namespace App\Services;

use App\Repositories\PropertyRepository;
use App\Services\Dto\DeletePropertyDto;
use App\Services\Interfaces\DeletePropertyServiceInterface;

class DeletePropertyService implements DeletePropertyServiceInterface
{
    private $repository;

    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param DeletePropertyDto $dto
     * @return bool
     */
    public function execute(DeletePropertyDto  $dto)
    {
        $property = $this->repository->findById($dto->id);

        return $property->delete();
    }



}