<?php


namespace App\Services;

use App\Repositories\PropertyRepository;
use App\Services\Dto\CreatePropertyDto;
use App\Services\Dto\DeletePropertyContractDto;
use App\Services\Interfaces\DeletePropertyServiceInterface;

class DeletePropertyContractService implements DeletePropertyServiceInterface
{
    private $repository;

    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param CreatePropertyDto $dto
     * @return bool
     */
    public function execute(DeletePropertyContractDto $dto)
    {
        $property = $this->repository->findById($dto->property_id);
        if($property->contract_id == $dto->contract_id) {
            return $property->contract->delete();
        }

        return false;

    }


}