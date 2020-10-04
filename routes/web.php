<?php

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
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');

Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');

Route::POST('/pizzas', 'PizzaController@store')->name('pizzas.store');

Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');;

Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');;

Auth::routes([
    'register' => false

 ]);

Route::get('/home', 'HomeController@index')->name('home');
