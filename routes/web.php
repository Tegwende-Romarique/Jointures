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

//  Route::get('/', function () {return view('welcome')});
 Route::get('/', 'CapitalesController@create')->name('accueil');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Les routes
Route::get('form-jointures', 'CapitalesController@create');
Route::post('EnregistrementCapitale', 'CapitalesController@store');
Route::post('EnregistrementPays', 'PaysController@store');
Route::get('liste-jointures', 'PaysController@index');




