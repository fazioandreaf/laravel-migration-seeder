<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

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
}
