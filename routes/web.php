<?php

use Illuminate\Support\Facades\Route;

use App\Models\Photo;
use App\Models\Ejemplo;
use App\Models\User;
use App\Models\Pais;

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

Route::get('post/{id}', '\App\Http\Controllers\PostController@show_post');
Route::get('contactanos', '\App\Http\Controllers\PostController@contactanos');

Route::get('prueba', function(){

    $photo = Photo::findOrFail(2);
    echo $photo->imageable;

});