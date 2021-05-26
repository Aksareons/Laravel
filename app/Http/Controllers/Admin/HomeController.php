<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
class HomeController extends Controller
{
   public function index()
   {
   

    return view('admin.home.index');

   }
   public function editFilm($slug){
    $film = Film::where('slug', $slug)->first();
    return view('admin.editfilm', [
        'film' => $film
    ]);
}

}
