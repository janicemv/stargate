<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Star extends Model
{
    protected $table = 'stars_merged';

    public function constellation()
    {
        return $this->belongsTo(Constellation::class);
    }

    public function names()
    {
        return $this->hasMany(StarName::class);
    }

    public function starMagic()
    {
        return $this->hasMany(StarMagic::class);
    }

    public function astronomy()
    {
        return $this->hasMany(StarAstronomy::class);
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'star_keyword');
    }

    public function keyword(string $name): void
    {
        $keyword = Keyword::firstOrCreate(['name' => $name]);

        $this->keywords()->attach($keyword);
    }

    public function behenians()
    {
        return $this->hasMany(StarMagic::class)->whereIn('id', [15, 16, 31, 32, 39, 45, 55, 61, 124, 330, 354, 399, 404, 435, 477]);
    }
}
