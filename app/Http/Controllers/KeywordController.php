<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    public function __invoke(Keyword $keyword)
    {
        return view('results', ['stars'->$keyword->stars]);
    }
}
