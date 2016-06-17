<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Http\Controllers\Cont;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/first', 'UserController@first');
Route::get('/second', 'UserController@second');
Route::post('/stas', 'UserController@stas');
Route::get('/base', 'Cont@base');

