<?php

namespace App\Services\Interfaces;
use App\Services\Dto\CreatePropertyContractDto;

interface CreatePropertyContractServiceInterface
{

    /**
     * @return bool
     * @param CreatePropertyContractDto $dto
     */
    public function execute(CreatePropertyContractDto $dto);
}