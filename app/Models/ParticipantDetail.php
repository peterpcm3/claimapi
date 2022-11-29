<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ParticipantDetail extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function participant(): BelongsTo
    {
        return $this->belongsTo(Participant::class);
    }

    /**
     * @return HasMany
     */
    public function participantExpenses(): HasMany
    {
        return $this->hasMany(ParticipantExpense::class);
    }
}
