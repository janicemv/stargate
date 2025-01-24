<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
        return $this->hasMany(StarMagic::class)->where('type', 'behenian');;
    }
}
