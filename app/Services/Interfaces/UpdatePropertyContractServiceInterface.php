<?php


namespace App\Services\Interfaces;

use App\Services\Dto\UpdatePropertyContractDto;

interface UpdatePropertyContractServiceInterface
{
    public function execute($id,UpdatePropertyContractDto $dto);
}