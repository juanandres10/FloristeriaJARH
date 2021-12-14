<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return redirect(app()->getLocale());
});

Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto','ContactoController@store');

Route::resource('ramos', 'RamosController')->parameters(['ramos' => 'project']);

Route::group([
	'prefix' => '{locale}',
	'where' => ['locale' => '[a-zA-Z]{2}'],
	'middleware' => 'setlocale'], function() {

	Route::get('/', function () {
		$nombre = "Juan Andres";
		return view('home',compact('nombre'));
	})->name('home');

	Route::view('/imagenes', 'imagenes')->name('imagenes');
	
	Route::view('/confirmacion', 'confirmacion')->name('confirmacion');

	Auth::routes();
});
	/*Route::get('/ramos', 'JugadorController@index')->name('jugadores.index');
	Route::get('/ramos/crear', 'JugadorController@create')->name('jugadores.create');
	Route::get('/ramos/{project}/editar', 'JugadorController@edit')->name('jugadores.edit');
	Route::patch('/ramos/{project}', 'JugadorController@update')->name('jugadores.update');
	Route::post('/ramos','JugadorController@store')->name('jugadores.store');
	Route::get('/ramos/{project}', 'JugadorController@show')->name('jugadores.show');
	Route::delete('/ramos/{project}', 'JugadorController@destroy')->name('jugadores.destroy');*/


	//Route::post('contacto',[ContactoController::class, 'store']);
	/*Route::get('posiciones', function() {
		return "Es una posicion del futbol";
	})->name('posicion');
	Route::get('futbol', function() {
	    return 'Hola esta pagina trata sobre futbol';
	});
	Route::get('hola/{nombre?}',function($nombre="Invitado"){
		return "Bienvenido a la pagina " . $nombre;
	});*/


/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
