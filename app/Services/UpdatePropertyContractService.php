<?php


namespace App\Services;

use App\Repositories\ContractRepository;
use App\Services\Dto\UpdatePropertyContractDto;
use App\Services\Interfaces\UpdatePropertyContractServiceInterface;

class UpdatePropertyContractService implements UpdatePropertyContractServiceInterface
{
    private $repository;
    public function __construct(ContractRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param UpdatePropertyContractDto $dto
     * @return bool
     */
    public function execute($id,UpdatePropertyContractDto $dto)
    {
        $contract = $this->repository->findByID($id);
        $contract->email = $dto->email;
        $contract->document_type = $dto->document_type;
        $contract->document = $dto->document;
        $contract->save();
        return $contract;
    }


}