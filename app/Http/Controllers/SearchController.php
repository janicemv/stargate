<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Models\Constellation;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function stars()
    {
        $stars = Star::where('name', 'LIKE', '%' . request('q') . '%')->get();

        return view('stars.results', ['stars' => $stars, 'q' => request('q')]);
    }

    public function constellations()
    {
        $constellations = Constellation::where('constellation', 'LIKE', '%' . request('q') . '%')->get();

        return view('constellation.results', ['constellations' => $constellations]);
    }
}
