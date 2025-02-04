<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;

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

    public function create()
    {
        $stars = Star::all();

        return view('stars.create', ['stars' => $stars]);
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'star_id' => 'required|exists:stars,id',
    //         'info_type' => 'required|in:astronomy,name,magic,keywords',
    //         'reference' => 'required|string',
    //         // Adicione mais validações aqui dependendo do tipo de informação
    //     ]);

    //     // Verificar se o tipo de informação é 'magic' e pelo menos um campo foi preenchido
    //     if ($validated['info_type'] === 'magic') {
    //         $magicFields = [
    //             'planets' => $request->input('planets'),
    //             'metals' => $request->input('metals'),
    //             'gemstones' => $request->input('gemstones'),
    //             'plants' => $request->input('plants'),
    //             'description' => $request->input('description'),
    //             'angel' => $request->input('angel'),
    //             'colors' => $request->input('colors'),
    //             'invocation' => $request->input('invocation'),
    //             'additional_info' => $request->input('additional_info'),
    //             'magic' => $request->input('magic'),
    //         ];

    //         // Verifique se ao menos um campo foi preenchido
    //         $isMagicFieldFilled = collect($magicFields)->contains(fn($value) => !empty($value));

    //         if (!$isMagicFieldFilled) {
    //             return back()->withErrors(['magic_fields' => 'Por favor, preencha ao menos um campo relacionado à magia.']);
    //         }
    //     }

    //     // Encontre a estrela
    //     $star = Star::findOrFail($validated['star_id']);

    //     // Registra os dados dependendo do tipo de informação selecionado
    //     switch ($validated['info_type']) {
    //         case 'astronomy':
    //             $star->astronomies()->create([
    //                 'type' => $request->input('type'),
    //                 'description' => $request->input('description'),
    //                 'reference' => $validated['reference'],
    //                 'url' => $request->input('url'),
    //                 'user_id' => auth()->id(),
    //             ]);
    //             break;

    //         case 'name':
    //             $star->names()->create([
    //                 'name' => $request->input('name'),
    //                 'reference' => $validated['reference'],
    //                 'user_id' => auth()->id(),
    //             ]);
    //             break;

    //         case 'magic':
    //             $star->magics()->create([
    //                 'type' => $request->input('type'),
    //                 'planets' => $request->input('planets'),
    //                 'metals' => $request->input('metals'),
    //                 'gemstones' => $request->input('gemstones'),
    //                 'plants' => $request->input('plants'),
    //                 'description' => $request->input('description'),
    //                 'angel' => $request->input('angel'),
    //                 'colors' => $request->input('colors'),
    //                 'invocation' => $request->input('invocation'),
    //                 'additional_info' => $request->input('additional_info'),
    //                 'magic' => $request->input('magic'),
    //                 'reference' => $validated['reference'],
    //                 'url' => $request->input('url'),
    //                 'user_id' => auth()->id(),
    //             ]);
    //             break;

    //         case 'keywords':
    //             $keywords = explode(',', $request->input('keywords')); // Supondo que as keywords sejam separadas por vírgula
    //             foreach ($keywords as $keyword) {
    //                 $star->keywords()->create([
    //                     'name' => trim($keyword),
    //                 ]);
    //             }
    //             break;
    //     }

    //     return redirect()->route('stars.show', $star->id)->with('success', 'Star information added successfully.');
    // }


}
