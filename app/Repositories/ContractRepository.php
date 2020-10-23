<?php
namespace App\Repositories;

use App\Models\Contract;

class ContractRepository extends AbstractRepository
{
    protected $modelClass = Contract::class;
    protected $relations = ['property'];
}