<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Repositories\PropertyRepository;

class ListProperties extends Controller
{

    public function handle(PropertyRepository $repo)
    {
        return PropertyResource::collection($repo->getAll());
    }

}