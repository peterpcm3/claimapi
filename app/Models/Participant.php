<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function participantDetails(): HasMany
    {
        return $this->hasMany(ParticipantDetail::class);
    }

    /**
     * @return HasMany
     */
    public function participantVisits(): HasMany
    {
        return $this->hasMany(ParticipantVisit::class);
    }
}
