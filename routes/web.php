<?php

use Illuminate\Support\Facades\Route;

use App\Models\Ejemplo;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return 'Usted esta aquí!';
});

//Route::get('/contactanos', function () { return view('contactanos');});

Route::get('post/{id}', '\App\Http\Controllers\PostController@show_post');
Route::get('contactanos', '\App\Http\Controllers\PostController@contactanos');

Route::get('prueba', function(){

    Ejemplo::where('id', 9)->where('activo', 0)->update(['campo'=>'Leccion 52', 'descripcion'=>'Estamos actualzando con un update', 'activo'=>1]);

    return 'Proccess successfull!';

});