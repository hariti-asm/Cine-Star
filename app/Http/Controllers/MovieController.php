<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::take(4)->get();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genre = Genre::findOrFail(4);
        $tvSeries = $genre->movies()->take(4)->get();
        return view("welcome", compact('movies', 'topRatedMovies', 'tvSeries'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

<<<<<<< HEAD
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        $genre = Genre::findOrFail(4);

        $tvSeries = $genre->movies()->take(4)->get();

        return view('movie.show', compact('movie','tvSeries'));
    }

=======
     public function show(string $slug)
     {
         $movie = Movie::where('slug', $slug)->firstOrFail();
         $genre = Genre::findOrFail(4);
         $tvSeries = $genre->movies()->take(4)->get();
     
         return view('movie.show', compact('movie', 'tvSeries'));
     }
     
    
>>>>>>> 1b9b8609691705154b4988718bd7e510c933af1a

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
