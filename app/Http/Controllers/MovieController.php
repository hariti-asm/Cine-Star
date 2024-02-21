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

    public function search()
    {
        $query = Movie::query();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genre = Genre::findOrFail(4);
        $tvSeries = $genre->movies()->take(4)->get();
        if ($search = request('search')) {
            $query->where('title', 'like', '%'. $search . '%');
        }
        $movies = $query->get();
        return view("welcome", compact('movies','topRatedMovies', 'tvSeries'));
    }
    

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
