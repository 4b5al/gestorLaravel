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
/*
Route::get('/', function () {
    return "Falae seus putos";
});
*/
Route::get('/', 'PrincipalController@principal');

Route::get('/', 'ContatoController@contato');


Route::get('/', 'SobreNosController@sobrenos');


/*Route::get($uri, $callback){}*/