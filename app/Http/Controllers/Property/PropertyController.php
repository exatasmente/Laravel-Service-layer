<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Http\Resources\PropertyResource;
use App\Repositories\PropertyRepository;
use App\Services\CreatePropertyService;
use App\Services\DeletePropertyService;
use App\Services\Dto\CreatePropertyDto;
use App\Services\Dto\DeletePropertyDto;
use App\Services\Dto\UpdatePropertyDto;
use App\Services\UpdatePropertyService;
use Illuminate\Http\Request;


class PropertyController extends Controller
{

    public function index(PropertyRepository $repo)
    {

        return PropertyResource::collection($repo->getAll());
    }

    public function search(Request $request, PropertyRepository $repo)
    {
        return PropertyResource::collection($repo->searchByAddress($request->input()));
    }

    public function show($id, PropertyRepository $repo)
    {
        return new  PropertyResource($repo->getById($id));
    }

    public function store(Request $request,CreatePropertyService $service)
    {

    }

    public function update($id,Request $request,UpdatePropertyService $service)
    {
        $dto = new UpdatePropertyDto($request->input());
        $dto->id = $id;

        return new PropertyResource($service->execute($id,$dto));
    }

    public function delete($id, DeletePropertyService $service){
        $dto = new DeletePropertyDto(['id' => $id]);
        return $service->execute($dto);
    }
}