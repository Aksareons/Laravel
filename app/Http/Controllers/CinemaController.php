<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    
    public function index() {
        $films = Film::All();
        return view('home', [
            'films' => $films
            ]);
    }
    public function getFilm($slug){
        $film = Film::where('slug', $slug)->first();
        return view('show-film', [
            'film' => $film
        ]);
    }
}
