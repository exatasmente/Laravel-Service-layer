<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Repositories\PropertyRepository;

class SearchProperties extends Controller
{

    public function handle(Request $request, PropertyRepository $repo)
    {
        return PropertyResource::collection($repo->searchByAddress($request->input()));
    }

}