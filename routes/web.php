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


Route::group(['namespace' => 'Paginas'], function(){
	Route::get('/', ['uses' => 'PaginaController@home'])->name('home');
	Route::get('empresas', ['uses' => 'CompaniaController@index'])->name('empresas');
	Route::get('maquinas', ['uses' => 'MaquinaController@index'])->name('maquinas');
	Route::get('maquina/{id}', ['uses' => 'MaquinaController@buscarMaquinaPorId'])->name('maquina');
	Route::get('productos', ['uses' => 'PagesController@index'])->name('productos');
	Route::get('servicios', ['uses' => 'ServicioController@index'])->name('servicios');
	Route::get('videos', ['uses' => 'VideoController@index'])->name('videos');
	Route::get('casos-de-exito', ['uses' => 'CasosDeExitoController@index'])->name('casos-de-exito');
	Route::get('solicitar-presupuesto', ['uses' => 'SolicitarPresupuestoController@index'])->name('solicitar-presupuesto');
	Route::get('contacto', ['uses' => 'ContactoController@index'])->name('contacto');
	Route::get('soluciones-a-medida', ['uses' => 'SolucionesMedidaController@index'])->name('soluciones-a-medida');
});

Auth::routes();

Route::prefix('adm')->group(function(){
	Route::group(['namespace' => 'Admin'], function(){
		Route::get('/', 'LoginController@login')->name('adm.auth.login');
		Route::post('login', 'LoginController@auth')->name('adm.auth.auth');
		Route::get('dashboard', 'AdminController@index')->name('adm.dashboard');
		Route::post('logout', 'LoginController@logout')->name('adm.auth.logout');

		Route::resource('admin', 'AdminController');
		Route::resource('data', 'DataController');
		Route::resource('metadata', 'MetadataController');

		Route::group(['prefix' => 'logo', 'as' => 'logo'], function() {
			Route::get('create', ['uses' => 'LogoController@create', 'as' => '.create']);
			Route::get('index', ['uses' => 'LogoController@index', 'as' => '.index']);
			Route::match(['get', 'post'], 'store', ['uses' => 'LogoController@store', 'as' => '.store']);
			Route::get('edit/{id}', ['uses' => 'LogoController@edit', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'LogoController@update', 'as' => '.update']);
			Route::get('duplicate/{id}', ['uses' => 'LogoController@duplicate', 'as' => '.duplicate']);
			Route::delete('destroy/{id}', ['uses' => 'LogoController@destroy', 'as' => '.destroy']);
		});

		Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
			Route::get('{section}/create', ['uses' => 'SliderController@create', 'as' => '.create']);
			Route::get('{section}/show', ['uses' => 'SliderController@show', 'as' => '.show']);
			Route::post('store', ['uses' => 'SliderController@store', 'as' => '.store']);
			Route::get('{section}/edit/{id}', ['uses' => 'SliderController@edit', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'SliderController@update', 'as' => '.update']);
			Route::get('duplicate/{id}', ['uses' => 'SliderController@duplicate', 'as' => '.duplicate']);
			Route::delete('destroy/{id}', ['uses' => 'SliderController@destroy', 'as' => '.destroy']);
		});
	});
});
