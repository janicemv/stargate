<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StarName extends Model
{

    function star(): BelongsTo
    {
        return $this->belongsTo(Star::class);
    }

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
