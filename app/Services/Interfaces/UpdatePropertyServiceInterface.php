<?php


namespace App\Services\Interfaces;



use App\Services\Dto\UpdatePropertyDto;

interface UpdatePropertyServiceInterface
{
    public function execute($id,UpdatePropertyDto $dto);
}