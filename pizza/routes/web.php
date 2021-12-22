<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Request;

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



Route::post('/pizzas', $p.'\PizzaController@store');//for interact with db
Route::post('/register2/save',$p.'\auth\RegisterController@register2save')->name('register2.save');
Route::post('/login2/check', $p.'\auth\Login2Controller@login2check')->name('login2.check');
Route::get('/logout', $p.'\auth\Login2Controller@logout')->name('logout');
Route::get('/register2', $p.'\auth\RegisterController@register2show')->name('register2');

route::group(['middleware'=>['authCheck']], function(){
    $p = 'App\Http\Controllers';
    Route::get('/login2', $p.'\auth\Login2Controller@login2show')->name('login2');
    Route::delete('/pizzas/{id}', $p.'\PizzaController@destroy'); //delete a record
    Route::get('/pizzas', $p.'\PizzaController@index');
    Route::get('/pizzas/create', $p.'\PizzaController@create');
    Route::get('/pizzas/{id}', $p.'\PizzaController@show'); //view with {id} must define at the last cause it is the same pizzas/[filename] format 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
