<?php


namespace App\Services\Interfaces;


use App\Services\Dto\DeletePropertyDto;

interface DeletePropertyServiceInterface
{
    public function execute(DeletePropertyDto $dto);
}