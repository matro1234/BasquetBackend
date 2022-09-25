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
Route::get('/todosCampeonatos', "App\Http\Controllers\CampeonatoController@mostrar");
Route::post('/añadirDelegado',"App\Http\Controllers\DelegadoController@store");
Route::get('/delegados', "App\Http\Controllers\DelegadoController@show");
Route::post('/añadirEquipo',"App\Http\Controllers\EquipoController@store");
Route::get('/',function(){
    return "holamundo";
});


