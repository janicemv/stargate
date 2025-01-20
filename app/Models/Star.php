<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    protected $table = 'stars';

    public function constellation()
    {
        return $this->belongsTo(Constellation::class);
    }
}
