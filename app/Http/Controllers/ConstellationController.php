<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Constellation;
use App\Models\Keyword;

class ConstellationController extends Controller
{
    public function index()
    {
        $constellations = Constellation::with(['stars' => function ($query) {
            $query->take(3);
        }])->get();

        return view('constellations.index', [
            'constellations' => $constellations,
        ]);
    }

    public function show(Constellation $constellation)
    {


        return view('constellations.constellation', [
            'constellation' => $constellation,

        ]);
    }
}
