<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Movies;

class controller_movies extends Controller
{
    public function movies(){
        $movies= Film::all();
        // dd($movies);
        return view('pages.homepage',compact('movies'));
    }
    public function film($id){
        $film= Film::findOrFail($id);
        // dd($film);
        return view('pages.film',compact('film'));
    }
    public function form(){
        return view ('pages.form');
    }
    public function store(Request $request){
        // dd($request -> all());
        $validate=$request -> validate([
            'title' => 'nullable|max:100',
            'original_title' => 'nullable|max:100',
            'nationality' => 'nullable|max:20',
            'date' => 'nullable|date',
            'vote' => 'nullable|numeric',
        ]);
        $movie=Movies::create($validate);
        return redirect()-> route('film',$movie->id);
    }
}
