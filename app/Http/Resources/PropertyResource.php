<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'owner_email' => $this->owner_email,
            'line_1' => $this->line_1,
            'line_2' => $this->line_2,
            'number' => $this->number,
            'contract' => $this->contract != null
                ? new ContractResource($this->contract)
                : null
            ,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
