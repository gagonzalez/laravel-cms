










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
<?php

use Illuminate\Support\Facades\Route;

use App\Models\Ejemplo;
use App\Models\User;
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
    // $delete = DB::delete('delete from prueba where idprueba = ?', [4]);
    // return $delete;

    //use App\Models\Ejemplo;
    // $ejemplo = Ejemplo::all();
    // foreach($ejemplo as $row){
    //     return $row->campo;
    // }

    // $ejemplo =Ejemplo::find(5);
    // return $ejemplo->descripcion;

    // $ejemplo =Ejemplo::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

    // $ejemplo =Ejemplo::findOrfail(58);
    // return $ejemplo;

    // $ejemplo = Ejemplo::where('id', '>', 3)->firstOrfail();
    // return $ejemplo;
	
	// $ejemplo = new Ejemplo;

    // $ejemplo->campo = 'Leccion 50';
    // $ejemplo->descripcion = 'Estamos viendo como se insertan los registros';
    // $ejemplo->activo = 1;

    // $ejemplo->save();
	
	// $ejemplo = Ejemplo::find(7);

    // $ejemplo->campo = 'Leccion 50';
    // $ejemplo->descripcion = 'Estamos viendo como se actualizan los registros';
    // $ejemplo->activo = 1;

    // $ejemplo->save();
	
	// Ejemplo::create(['campo'=>'Leccion 51', 'descripcion'=>'Estamos insertando con un create', 'activo'=>0]);
	
	// $ejemplo = Ejemplo::find(7);
    // $ejemplo->delete();
	
	// Ejemplo::destroy(7);

	// Ejemplo::where('id', 3)->delete();
	
	// Ejemplo::where('id', 9)->where('activo', 0)->update(['campo'=>'Leccion 52', 'descripcion'=>'Estamos actualzando con un update', 'activo'=>1]);

	//Ejemplo::create(['campo'=>'Leccion 51', 'descripcion'=>'Estamos insertando con un create', 'activo'=>0]);
    //Ejemplo::find(9)->delete();
    //$Ejemplo = Ejemplo::onlyTrashed()->where('activo', 1)->get();
    //return $Ejemplo;

		
	//$Ejemplo = Ejemplo::withTrashed()->where('activo', 0)->get();
    //return $Ejemplo;
	
	//$Ejemplo = Ejemplo::withTrashed()->where('activo', 1)->restore();
	 
	 
    //$Ejemplo = Ejemplo::withTrashed()->where('id', 9)->forceDelete();
	
	// //Relaciones 1 a 1
	// return User::find($id)->Ejemplo;	
	// return User::find($id)->Ejemplo->Campo();
	
	// //Relacion inversa
	// return Ejemplo::find($id)->user->name;
	
	// //Relaciones 1 a muchos	
	$user = User::find(1);
    
    foreach($user->ejemplos as $ejem){
        echo $ejem->campo."<br>";
    }
	
	
	
	

});