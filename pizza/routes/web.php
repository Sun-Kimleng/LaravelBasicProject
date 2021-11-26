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
$p = 'App\Http\Controllers';

Route::get('pizza', $p.'\pizzaController@index');

Route::get('/pizza/{id}', $p.'\pizzaController@show');
