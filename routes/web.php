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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return 'Usted esta aquí!';
});

//Route::get('/contactanos', function () { return view('contactanos');});

Route::get('contactanos', '\App\Http\Controllers\PostController@contactanos');

Route::get('prueba', function(){
    //return view('post')->with('id', $id);
    //return view('post', compact('id'));

    //DB::insert('insert into prueba(campo, descripcion) values (?,?)', ['laravel','prueba 3 de insercion de base de datos']);
    //return 'Insert successfully!';

    //$resultado = DB::select('select * from prueba where idprueba = ?', [3]);
    //return var_dump($resultado);

    // $resultado = DB::select('select * from prueba');
    // $Array = 'Información: ';
    // foreach($resultado as $row ){
    //     $Array = $row->descripcion;
    // }
    // return $Array;

    // $update = DB::update('update prueba set descripcion = ? where idprueba = ?', ['prueba 5 de insercion de base de datos',5]);
    // return $update;

    // $delete = DB::delete('delete from prueba where idprueba = ?', [4]);
    // return $delete;

});