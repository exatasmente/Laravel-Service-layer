<?php
namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Services\DeletePropertyService;
use App\Services\Dto\DeletePropertyDto;
use Illuminate\Http\Request;

class DeleteProperty extends Controller
{

    public function handle(Request $request,DeletePropertyService $service)
    {
        $dto = new DeletePropertyDto($request->input());
        return $service->execute($dto);
    }

}