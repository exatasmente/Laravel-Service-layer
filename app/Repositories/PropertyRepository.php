<?php

namespace App\Repositories;

use App\Models\Contract;
use App\Models\Property;

class PropertyRepository extends AbstractRepository
{
    protected $modelClass = Property::class;
    protected $relations = ['contract'];
}