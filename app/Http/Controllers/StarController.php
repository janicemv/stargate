<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;
use App\Models\StarAstronomy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StarController extends Controller
{

    public function index(Request $request)
    {
        $sortColumn = $request->input('sort', 'name');
        $sortDirection = $request->input('direction', 'asc');

        if ($sortColumn === 'BayerId') {
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

            $orderCase = "CASE";
            foreach ($greek_order as $letter => $position) {
                $orderCase .= " WHEN BayerId LIKE '{$letter}%' THEN {$position}";
            }
            $orderCase .= " ELSE 999 END";

            $stars = Star::orderByRaw("{$orderCase}, BayerId {$sortDirection}")->paginate(30);
        } else {
            $stars = Star::orderByRaw("$sortColumn IS NULL, $sortColumn = '', $sortColumn $sortDirection")
                ->paginate(30);
        }
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

    public function magic()
    {

        $stars = Star::all();
        return view('stars.magicstars', ['stars' => $stars]);
    }

    public function create($formType)
    {
        $stars = Star::all();

        if ($formType === 'astro') {
            return view('stars.createAstro', ['stars' => $stars]);
        } elseif ($formType === 'name') {
            return view('stars.createNames', ['stars' => $stars]);
        } elseif ($formType === 'magic') {
            return view('stars.createMagic', ['stars' => $stars]);
        } elseif ($formType === 'keywords') {
            return view('stars.createKeywords', ['stars' => $stars]);
        } elseif ($formType === 'glyphs') {
            return view('stars.createGlyphs', ['stars' => $stars]);
        } else {
            abort(404);
        }
    }



    public function store(Request $request, $formType)
    {
        $star = Star::findOrFail($request->star_id);

        if ($formType === 'astro') {
            $attributes = $request->validate([
                'star_id' => ['required', 'exists:stars,id'],
                'type' => ['required'],
                'description' => ['required'],
                'reference' => ['required'],
                'url' => ['nullable', 'active_url'],
            ]);

            $star->astronomy()->create(array_merge($attributes, [
                'user_id' => Auth::user()->id,
            ]));
        } else if ($formType === 'name') {
            $attributes = $request->validate([
                'star_id' => ['required', 'exists:stars,id'],
                'name' => ['required'],
                'reference' => ['required'],
                'url' => ['nullable', 'active_url'],

            ]);

            $star->names()->create(array_merge($attributes, [
                'user_id' => Auth::user()->id,
            ]));
        } else if ($formType === 'magic') {

            $attributes = $request->validate([
                'star_id' => ['required', 'exists:stars,id'],
                'planets' => ['nullable'],
                'metals' => ['nullable'],
                'gemstones' => ['nullable'],
                'plants' => ['nullable'],
                'description' => ['nullable'],
                'angel' => ['nullable'],
                'colors' => ['nullable'],
                'invocation' => ['nullable'],
                'additional_info' => ['nullable'],
                'magic' => ['nullable'],
                'reference' => ['required'],
                'url' => ['nullable', 'active_url'],
            ]);

            $star->starMagic()->create(array_merge($attributes, [
                'user_id' => Auth::user()->id,
                'star_id' => $star->id,
            ]));
        } elseif ($formType === 'keywords') {
            $attributes = $request->validate([
                'star_id' => ['required', 'exists:stars,id'],
                'keywords' => ['required'],
            ]);

            foreach (explode(',', $attributes['keywords']) as $keyword) {
                $star->keyword(trim($keyword));
            }
        } elseif ($formType === 'glyph') {
            // dd($request->all());

            $attributes = $request->validate([
                'star_id' => ['required', 'exists:stars,id'],
                'glyph' => ['required', 'file', 'image', 'mimes:png', 'max:2048'],
                'description' => ['required'],
                'reference' => ['required'],
                'url' => ['nullable', 'active_url'],
            ]);

            $path = null;

            if ($request->hasFile('glyph')) {
                $file = $request->file('glyph');
                $star = Star::findOrFail($request->star_id);
                $baseName = Str::slug($star->name, '_');
                $extension = $file->getClientOriginalExtension();

                $fileName = $baseName . '.' . $extension;
                $counter = 1;

                while (Storage::disk('public')->exists("stars/{$fileName}")) {
                    $fileName = $baseName . '_' . $counter . '.' . $extension;
                    $counter++;
                }

                $path = $file->storeAs('stars', $fileName, 'public');
            }


            $star->symbols()->create([
                'star_id'     => $request->star_id,
                'path'        => $path,
                'description' => $request->description,
                'reference'   => $request->reference,
                'url'         => $request->url,
                'user_id'     => Auth::id(),
            ]);
        }


        return redirect("/star/{$star->name}");
    }
}
