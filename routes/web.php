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

/* Route::get('/', function () {
    return view('welcome');
});
*/


//We’ll be using React Router to handle routing in our application
 Route::view('/{path?}', 'app');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
