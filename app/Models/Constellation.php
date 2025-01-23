<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Constellation extends Model
{

    protected $table = 'constellations';

    public function stars(): HasMany
    {
        return $this->hasMany(Star::class);
    }

    public function magic()
    {
        return $this->hasMany(ConstellationMagic::class);
    }
}
