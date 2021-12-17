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

Route::get('/', $p.'\PizzaController@home');
Route::get('/pizzas', $p.'\PizzaController@index');
Route::post('/pizzas', $p.'\PizzaController@store');//for interact with db
Route::get('/pizzas/create', $p.'\PizzaController@create');
Route::get('/pizzas/{id}', $p.'\PizzaController@show'); //view with {id} must define at the last cause it is the same pizzas/[filename] format
Route::delete('/pizzas/{id}', $p.'\PizzaController@destroy'); //delete a record

