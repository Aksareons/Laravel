<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class AddFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::orderBy('created_at', 'desc')->paginate(9);

        return view('admin.list', [
            'films' => $films
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.addfilm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_film = new Film();
        $new_film->title = $request->title;
        $new_film->time = $request->time;
        $new_film->description = $request->description;
        $new_film->text = $request->text;
        $new_film->slug = $request->slug;
        $new_film->srcimage = $request->srcimage;
        
        // $new_film->cinema_id = 54;
        $new_film->save();

        return redirect()->back()->withSuccess('Фильм успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        
        return view(dd($film));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        
        $film->title = $request->title;
        $film->time = $request->time;
        $film->description = $request->description;
        $film->text = $request->text;
        $film->srcimage = $request->srcimage;
        $film->time = $request->time;
        
        // $film->cinema_id = 54;
        $film->save();

        return redirect()->back()->withSuccess('Информация успешно ОБНОВЛЕНА');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
         $film->delete();
         
         return redirect()->back()->withSuccess('Фильм успешно удален');

    }
}
