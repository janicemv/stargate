<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;
use App\Models\StarAstronomy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class StarController extends Controller
{


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
        } elseif ($formType === 'glyph') { //parei aqui! tem q corrigir o path
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
                $path = $request->file('glyph')->store('stars', 'public');
            }

            echo $path;

            // $star->symbols()->create([
            //     'star_id'     => $request->star_id,
            //     'path'        => $path,
            //     'description' => $request->description,
            //     'reference'   => $request->reference,
            //     'url'         => $request->url,
            //     'user_id'     => Auth::id(),
            // ]);



            // return redirect("/star/{$star->name}");
        }
    }
}
