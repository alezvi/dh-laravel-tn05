<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorsController extends Controller
{
    public function directory() 
    {
        $actors = Actor::all();

        return view('actors', [
            'actors' => $actors
        ]);
    }
}
