<?php


namespace App\Services\Interfaces;



use App\Services\Dto\DeletePropertyContractDto;

interface DeletePropertyContractInterface
{
    /**
     * @return bool
     * @param DeletePropertyContractDto $dto
     */
    public function execute(DeletePropertyContractDto $dto);
}