<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ConstellationMagic extends Model
{
    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function constellation(): BelongsTo
    {
        return $this->belongsTo(Constellation::class);
    }
}
