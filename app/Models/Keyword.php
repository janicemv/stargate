<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Keyword extends Model
{

    public function starMagic(): BelongsToMany
    {
        return $this->belongsToMany(StarMagic::class);
    }
}
