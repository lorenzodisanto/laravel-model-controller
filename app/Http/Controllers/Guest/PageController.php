<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    //mostra homepage sito
    public function base(){
        return view("home");
    }

    // funzione per recuperare i movies dal database
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    // funzione dettaglio movie
    public function show(int $id)
    {
        $movie = Movie::find($id);

        if(empty($movie))
        abort(404);
    
        return view('movies.show', compact('movie'));
    }
}
