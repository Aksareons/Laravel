<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CinemaController;

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

Route::get('/addfilm', function () {
    return view('addfilm');
})->name('addfilm');

Route::get('/', function () {
    return view('admin');
})->name('admin');
Route::get('/afish', function () {
    return view('afish');
})->name('afish');
Route::get('/home', [CinemaController::class, 'index']);
Route::get('/afisha', function () {
    return view('afisha');
})->name('afisha');
Route::get('/filmcard', function () {
    return view('filmcard');
})->name('afisha');