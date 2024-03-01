<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics=Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show',compact('comic'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newcomicData = $request->all();
        $comic = Comic::create($newcomicData);

        // TODO: valido i dati, ma lo faremo in futuro

        // $comic = new Comic();
        // $comic->title = $newcomicData['title'];
        // $comic->description = $newcomicData['description'];
        // $comic->src = $newcomicData['thumb'];
        // $comic->price = $newcomicData['price'];
        // $comic->series =$newcomicData['series'];
        // $comic->sale_date =$newcomicData['sale_date'];
        // $comic->type =$newcomicData['type'];
        // $explodeArtists= explode(',',$newcomicData['artists']);
        // $comic->artists = json_encode($explodeArtists);
        // $comic->writers =str_replace(",",'|', $newcomicData['writers']);
        // $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        // dd($comic);
        return view('comics.edit',compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $newcomicData = $request->all();
        $comic->update($newcomicData);


        // $comic->title = $newcomicData['title'];
        // $comic->description = $newcomicData['description'];
        // $comic->src = $newcomicData['thumb'];
        // $comic->price = $newcomicData['price'];
        // $comic->series =$newcomicData['series'];
        // $comic->sale_date =$newcomicData['sale_date'];
        // $comic->type =$newcomicData['type'];
        // $explodeArtists= explode(',',$newcomicData['artists']);
        // $comic->artists = json_encode($explodeArtists);
        // $comic->writers =str_replace(",",'|', $newcomicData['writers']);
        // $comic->save();

        return redirect()->route('comics.index', ['comic' => $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        // dd($comic);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
