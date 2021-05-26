<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CinemaController;
use \App\Http\Controllers\AddFilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/addfilm', function () {
//     return view('addfilm');
// })->name('addfilm');
// Route::post('/addfilm/submit', [AddFilmController::class, 'submit'])->name('addfilm');



Route::get('/afish', function () {
    return view('afish');
})->name('afish');
Route::get('/home', [CinemaController::class, 'index']);
Route::get('/home/{slug}', [CinemaController::class, 'getFilm'])->name('getFilm');

Route::get('/afisha', function () {
    return view('afisha');
})->name('afisha');
Route::get('/filmcard', function () {
    return view('filmcard');
})->name('afisha');
Route::get('/afisha', function () {
    return view('afisha');
})->name('afisha');
Auth::routes();


Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index']);
Route::get('/editfilm/{slug}', [App\Http\Controllers\Admin\HomeController::class, 'editFilm'])->name('editFilm');
Route::post('/updatefilm/{slug}', [App\Http\Controllers\Admin\HomeController::class, 'updateFilm'])->name('updateFilm');

Route::resource('addfilm', AddFilmController::class);


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
   
   
});