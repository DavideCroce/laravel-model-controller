<?php

namespace App\Http\Controllers;

use App\Movie;

class PrimeVideo extends Controller
{
    //
    public function index()
    {
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
