<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeVideo extends Controller
{
    //
    public function index()
    {
        $movies = [];
        return view('movies', compact('movies'));
    }
}
