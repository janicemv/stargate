<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Models\Constellation;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $stars = Star::where('name', 'LIKE', '%' . request('q') . '%')->get();
        $constellations = Constellation::where('name', 'LIKE', '%' . request('q') . '%')
            ->orWhere('abbrev', 'LIKE', '%' . request('q') . '%')
            ->get();



        return view('search', ['stars' => $stars, 'constellations' => $constellations, 'q' => request('q')]);
    }
}
