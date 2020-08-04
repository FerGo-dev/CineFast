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
    return view('welcome');
});

//admin routes

Route::get('/admin/disney', 'DisneyController@Index'); 

Route::get('/admin/disney/create', "DisneyController@Create");

Route::post('/admin/disney/create', "DisneyController@Store");

Route::get('/admin/disney/edit/{id}', "DisneyController@Edit");

Route::post('/admin/disney/edit', 'DisneyController@Update');

Route::get('/admin/disney/delete/{id}', "DisneyController@Delete");

Route::delete('/admin/disney/delete', 'DisneyController@Remove');

Route::get('/admin/disney/{id}', "DisneyController@Show");

//ProductStore Routes 
Route::get('/disney', 'DisneyController@DisneyStore')->name('DisneyStore');

Route::get('/disney/{id}', 'DisneyController@DisneyDetails')->name('DisneyDetails');

///////////////////////////////////////////////////////////////////////////////////////////////
                              //NETFLIX ADMIN ROUTES


Route::get('/admin/netflix', 'NetflixController@Index'); 

Route::get('/admin/netflix/create', "NetflixController@Create");

Route::post('/admin/netflix/create', "NetflixController@Store");

Route::get('/admin/netflix/edit/{id}', "NetflixController@Edit");

Route::post('/admin/netflix/edit', 'NetflixController@Update');

Route::get('/admin/netflix/delete/{id}', "NetflixController@Delete");

Route::delete('/admin/netflix/delete', 'NetflixController@Remove');

Route::get('/admin/netflix/{id}', "NetflixController@Show");

//nETFLIXStore Routes 
Route::get('/netflix', 'NetflixController@NetflixStore')->name('NetflixStore');

Route::get('/netflix/{id}', 'NetflixController@NetflixDetails')->name('NetflixDetails');

////////////////////////////////////////////////////////////////////////////////////////////
                           //Admin MOVIES

Route::get('/admin/movies', 'MoviesController@Index'); 

Route::get('/admin/movies/create', "MoviesController@Create");

Route::post('/admin/movies/create', "MoviesController@Store");

Route::get('/admin/movies/edit/{id}', "MoviesController@Edit");

Route::post('/admin/movies/edit', 'MoviesController@Update');

Route::get('/admin/movies/delete/{id}', "MoviesController@Delete");

Route::delete('/admin/movies/delete', 'MoviesController@Remove');

Route::get('/admin/movies/{id}', "MoviesController@Show");

//MoviesStore Routes 
Route::get('/movies', 'MoviesController@MoviesStore')->name('MoviesStore');

Route::get('/movies/{id}', 'MoviesController@MoviesDetails')->name('MoviesDetails');

Route::get('/mongodb', function () {
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
