<?php

namespace App\Services;



use App\Models\Contract;
use App\Models\Property;
use App\Repositories\PropertyRepository;
use App\Services\Dto\CreatePropertyContractDto;
use App\Services\Interfaces\CreatePropertyContractServiceInterface;

class CreatePropertyContractService implements CreatePropertyContractServiceInterface
{
    private $repository;

    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $property_id
     * @param CreatePropertyContractDto $dto
     * @return Contract
     */

    public function execute(CreatePropertyContractDto $dto)
    {
        $property = $this->repository->findByID($dto->property_id);
        $contract = new Contract();
        if($property->contract != null){
            throw new  \InvalidArgumentException('property already has a contract');
        }
        $contract->property_id = $property->id;
        $contract->email = $dto->email;
        $contract->name = $dto->name;
        $contract->document_type= $dto->document_type;
        $contract->document = $dto->document;
        $contract->save();

        return $contract;
    }



}