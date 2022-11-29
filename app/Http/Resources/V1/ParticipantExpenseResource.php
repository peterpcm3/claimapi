<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantExpenseResource extends JsonResource
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
            'study' => new StudyResource($this->study),
            'participantDetail' => new ParticipantDetailResource($this->participantDetail),
            'participantVisit' => new ParticipantVisitResource($this->participantVisit),
            'expenses' => ExpenseResource::collection($this->expenses)
        ];
    }
}
