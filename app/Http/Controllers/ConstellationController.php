<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Constellation;
use App\Models\Keyword;
use App\Models\StarMagic;

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

        $greek_order = [
            'α' => 1,
            'β' => 2,
            'γ' => 3,
            'δ' => 4,
            'ε' => 5,
            'ζ' => 6,
            'η' => 7,
            'θ' => 8,
            'ι' => 9,
            'κ' => 10,
            'λ' => 11,
            'μ' => 12,
            'ν' => 13,
            'ξ' => 14,
            'ο' => 15,
            'π' => 16,
            'ρ' => 17,
            'σ' => 18,
            'τ' => 19,
            'υ' => 20,
            'φ' => 21,
            'χ' => 22,
            'ψ' => 23,
            'ω' => 24
        ];

        $constellation->load([
            'stars' => function ($query) use ($greek_order) {
                $orderCase = "CASE";
                foreach ($greek_order as $letter => $position) {
                    $orderCase .= " WHEN `BayerId` LIKE '{$letter}%' THEN {$position}";
                }
                $orderCase .= " ELSE 999 END";

                $query->orderByRaw("{$orderCase}, `BayerId` ASC");
            },
            'keywords',
            'magic'
        ]);


        return view('constellations.constellation', [
            'constellation' => $constellation,
            'keywords' => Keyword::all(),
            'magic' => StarMagic::all()


        ]);
    }
}
