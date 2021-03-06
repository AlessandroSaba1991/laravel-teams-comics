<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', 'Guest\ComicController@index')->name('guest.comics.index');
Route::get('/comics/{comic}', 'Guest\ComicController@show')->name('guest.comics.show');

Route::get('/characters', 'Guest\CharacterController@index')->name('guest.characters.index');
Route::get('/characters/{character}', 'Guest\CharacterController@show')->name('guest.characters.show');

Route::resource('/admin/characters', 'Admin\CharacterController');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
