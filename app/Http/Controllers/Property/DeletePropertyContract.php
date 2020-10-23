<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContractResource;
use App\Services\DeletePropertyContractService;
use App\Services\Dto\DeletePropertyContractDto;
use Illuminate\Http\Request;

class DeletePropertyContract extends Controller
{

    public function handle($property_id,$contract_id,DeletePropertyContractService  $service)
    {
        $dto = new DeletePropertyContractDto(['property_id' => $property_id, 'contract_id' => $contract_id]);
        return new ContractResource($service->execute($dto));
    }

}