<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorsController extends Controller
{
    public function directory() 
    {
        $actors = Actor::paginate(10);

        return view('actors', [
            'actors' => $actors
        ]);
    }

    public function search(Request $request) 
    {
        $like = '%' . $request->input('q') . '%';
        
        $actors = Actor::
            where('first_name', 'like', $like)
            ->orWhere('last_name', 'like', $like)
            ->paginate(10);

        return view('actors', [
            'actors' => $actors
        ]);
    }

    public function show(Actor $actor) 
    {
        dd($actor);
    }
}
