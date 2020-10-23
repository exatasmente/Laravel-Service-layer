<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Services\CreatePropertyService;
use App\Services\Dto\CreatePropertyDto;
use Illuminate\Http\Request;

class CreateProperty extends Controller
{

    public function handle(CreatePropertyService $service,Request $request)
    {
        $dto = new CreatePropertyDto($request->input());
        return new PropertyResource($service->execute($dto));
    }

}