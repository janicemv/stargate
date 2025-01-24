<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
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
        return $this->hasManyThrough(
            StarMagic::class,
            Star::class,
            'constellation_id', // Chave estrangeira em stars
            'id',
            'id',
            'id'
        );
    }

    public function keywords(): HasManyThrough
    {
        return $this->hasManyThrough(
            Keyword::class,
            Star::class,
            'constellation_id', // Chave estrangeira em stars
            'id',
            'id',
            'id'
        )->distinct();
    }
}
