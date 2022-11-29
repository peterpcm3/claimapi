<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ParticipantExpense extends Model
{
    use HasFactory;

    /**
     * Reverse Study
     *
     * @return BelongsTo
     */
    public function study(): BelongsTo
    {
        return $this->belongsTo(Study::class);
    }

    /**
     * Reverse ParticipantDetail
     *
     * @return BelongsTo
     */
    public function participantDetail(): BelongsTo
    {
        return $this->belongsTo(ParticipantDetail::class);
    }

    /**
     * Reverse ParticipantDetail
     *
     * @return BelongsTo
     */
    public function participantVisit(): BelongsTo
    {
        return $this->belongsTo(ParticipantVisit::class);
    }

    /**
     * @return HasMany
     */
    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }
}
