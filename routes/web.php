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

Route::view('/', 'presentation')->name('presentation');					  					//Muestra la presentacion
Route::get('problems/{id}', 'problemasController@index')->name('problems'); //Se encarga de controlar las vistas por numero de problemas
Route::view('about', 'about')->name('about');			  					//Muestra la informacion "Acerca de"