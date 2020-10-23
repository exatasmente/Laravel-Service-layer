<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContractResource;
use App\Services\Dto\UpdatePropertyContractDto;
use App\Services\UpdatePropertyContractService;
use Illuminate\Http\Request;

class UpdatePropertyContract extends Controller
{

    public function handle($property_id, Request $request, UpdatePropertyContractService $service)
    {

        $dto = new UpdatePropertyContractDto($request->input());
        return new ContractResource($service->execute($property_id,$dto));
    }

}