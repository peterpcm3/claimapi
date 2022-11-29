<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'bank_name' => $this->bank_name,
            'bank_address' => $this->bank_address,
            'account_holder' => $this->account_holder,
            'account_type' => $this->account_type,
            'currency' => $this->currency,
            'routing_number' => $this->routing_number,
            'transit_number' => $this->transit_number
        ];
    }
}
