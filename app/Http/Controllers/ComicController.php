<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create', ['comic' => new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'title' => 'required|string|unique:comics',
            'thumb' => 'required|url:http,https',
            'type' => 'required|string',
            'price' => 'required|string',
            'series' => 'required|string|unique:comics',
            'sale_date' => 'required|string',
            'description' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ],
        [
            'title.required' => 'il campo titolo è obbligatorio',
            'title.unique' => "esiste già un fumetto con il titolo $request->title",
            'series.required' => 'il campo serie è obbligatorio',
            'series.unique' => "esiste già un fumetto della serie $request->series",
            'thumb.required' => 'il campo immagine è obbligatorio',
            'type.required' => 'il campo tipologia di fumetto è obbligatorio',
            'price.required' => 'il campo prezzo è obbligatorio',
            'sale_date.required' => 'il campo data di pubblicazione è obbligatorio',
            'description.required' => 'il campo descrizione è obbligatorio',
            'artists.required' => 'il campo artisti è obbligatorio',
            'writers.required' => 'il campo scrittori è obbligatorio',
        ]
    );

        $data = $request->all();

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'series' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'thumb' => 'required|url:http,https',
            'type' => 'required|string',
            'price' => 'required|string',
            'sale_date' => 'required|string',
            'description' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $data = $request->all();

        $comic->update($data);
        return to_route('comics.show', $comic->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}