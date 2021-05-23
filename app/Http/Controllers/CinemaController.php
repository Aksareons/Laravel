<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    
    public function index() {
        $films = Film::all();
        return view('main', [
            'films' => $films
            ]);
    }
}
