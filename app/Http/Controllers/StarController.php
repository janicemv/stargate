<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;

class StarController extends Controller
{
    public function index()
    {
        return view('stars.stargate', [
            'stars' => Star::simplePaginate(30)
        ]);
    }

    public function show(Star $star)
    {

        return view('stars.star', ['star' => $star]);
    }
}
