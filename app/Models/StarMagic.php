<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class StarMagic extends Model
{

    function star()
    {
        return $this->belongsTo(Star::class);
    }
}
