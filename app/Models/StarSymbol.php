<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StarSymbol extends Model
{
    protected $table = 'stars_symbols';

    function star()
    {
        return $this->belongsTo(Star::class);
    }
}
