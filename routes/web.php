<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('superhero', 'App\Http\Controllers\SuperController');

Route::get('superhero', 'App\Http\Controllers\SuperController@index')->name('superhero.index'); 
Route::post('superhero', 'App\Http\Controllers\SuperController@store')->name('superhero.store'); 
Route::post('superhero/create', 'App\Http\Controllers\SuperController@create')->name('superhero.create'); 
Route::get('superhero/{id}', 'App\Http\Controllers\SuperController@show')->name('superhero.show'); 
Route::patch('superhero/{id}', 'App\Http\Controllers\SuperController@update')->name('superhero.update'); 
Route::delete('superhero/{id}', 'App\Http\Controllers\SuperController@destroy')->name('superhero.destroy'); 
Route::get('superhero/{id}/edit', 'App\Http\Controllers\SuperController@edit')->name('superhero.edit'); 



