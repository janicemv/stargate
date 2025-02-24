<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class StarSymbol extends Model
{
    protected $table = 'stars_symbols';

    function star()
    {
        return $this->belongsTo(Star::class);
    }

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
