<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;

class StarController extends Controller
{
    // public function index()
    // {
    //     return view('stars.stargate', [
    //         'stars' => Star::paginate(30)
    //     ]);
    // }

    public function index(Request $request)
    {
        $sortColumn = $request->input('sort', 'name');
        $sortDirection = $request->input('direction', 'asc');

        $stars = Star::orderBy($sortColumn, $sortDirection)->paginate(30);

        return view('stars.stargate', [
            'stars' => $stars,
            'sortColumn' => $sortColumn,
            'sortDirection' => $sortDirection
        ]);
    }


    public function show(Star $star)
    {

        return view('stars.star', ['star' => $star]);
    }
}
