<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
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
            'expense_type' => $this->expense_type,
            'other_description' => $this->other_description,
            'currency' => $this->currency,
            'amount' => $this->amount,
            'info' => $this->info
        ];
    }
}
