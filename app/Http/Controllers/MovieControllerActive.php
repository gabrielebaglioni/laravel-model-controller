<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieControllerActive extends Controller
{
    public function active($id){

        $movie = Movie::find($id);
        
        return view('activeMovie', compact('movie'));
    }
}

