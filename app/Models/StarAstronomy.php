<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StarAstronomy extends Model
{
    /** @use HasFactory<\Database\Factories\StarAstronomyFactory> */
    use HasFactory;

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function star(): BelongsTo
    {
        return $this->belongsTo(Star::class);
    }
}
