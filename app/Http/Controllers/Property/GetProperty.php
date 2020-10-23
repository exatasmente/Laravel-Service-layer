<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Repositories\PropertyRepository;

class GetProperty extends Controller
{

    public function handle($id, PropertyRepository $repo)
    {
        return new  PropertyResource($repo->findByID($id));
    }

}