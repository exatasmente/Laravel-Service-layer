<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Services\CreatePropertyService;
use App\Services\Dto\CreatePropertyDto;
use App\Services\Dto\UpdatePropertyDto;
use App\Services\UpdatePropertyService;
use Illuminate\Http\Request;

class UpdateProperty extends Controller
{

    public function handle($id,Request $request,UpdatePropertyService $service)
    {
        $dto = new UpdatePropertyDto($request->input());
        return new PropertyResource($service->execute($id,$dto));
    }

}