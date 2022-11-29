<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Study extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function participantExpenses(): HasMany
    {
        return $this->hasMany(ParticipantExpense::class);
    }
}
