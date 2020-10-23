<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContractResource;
use App\Http\Resources\PropertyResource;
use App\Services\CreatePropertyContractService;
use App\Services\CreatePropertyService;
use App\Services\DeletePropertyService;
use App\Services\Dto\CreatePropertyContractDto;
use App\Services\Dto\DeletePropertyDto;
use App\Services\Dto\UpdatePropertyDto;
use App\Services\UpdatePropertyService;
use Illuminate\Http\Request;

class CreatePropertyContract extends Controller
{

    public function handle(Request $request,CreatePropertyContractService  $service)
    {
        $dto = new CreatePropertyContractDto($request->input());
        return new ContractResource($service->execute($dto));
    }

}