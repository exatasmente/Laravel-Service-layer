<?php


namespace App\Services\Interfaces;


use App\Services\Dto\CreatePropertyDto;

interface CreatePropertyServiceInterface
{
    /**
     * @return bool
     * @param CreatePropertyDto $dto
     */
    public function execute(CreatePropertyDto $dto);
}