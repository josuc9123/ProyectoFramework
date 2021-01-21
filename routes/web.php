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
Route::get('categoriasA', function () {
    return view('anonimo.categoriasA');	
});
Route::get('anonimo', function () {
    return view('anonimo.anonimo');	
});
Route::get('layout', function () {
    return view('layout.layout');
});
//Route::get('supervisor', function () {
  //  return view('supervisor.supervisor');	
//});   
Route::get('productoS', function () {
    return view('supervisor.productoS');	
}); 

Route::get('productosV', function () {
    return view('productosV');	
}); 
Route::get('preguntarp', function () {
    return view('preguntarp');	
}); 
Route::get('Mproductos', function () {
    return view('Mproductos');	
}); 


Route::patch('edit/{id}','UserController@edit')->name('edit');
Route::get('editar/{id}','UserController@editar')->name('editar');
Route::get('mostrarU/{id}','UserController@mostrar')->name('mostrarU');
Route::delete('delete/{id}','UserController@delete')->name('delete');
Route::get('usuariosS','UserController@list');
Route::get('crear','UserController@crear');
Route::post('save','UserController@save')->name('save');
//crud categorias
Route::patch('editC/{id}','CategoriasController@edit')->name('editC');
Route::get('editarC/{id}','CategoriasController@editar')->name('editarC');
Route::delete('deleteC/{id}','CategoriasController@deleteC')->name('deleteC');
Route::get('categorias','CategoriasController@list');
Route::get('crearC','CategoriasController@crear');
Route::post('saveC','CategoriasController@save')->name('saveC');
//crud producto 
Route::patch('editP/{id}','ProductosController@edit')->name('editP');
Route::get('editarP/{id}','ProductosController@editar')->name('editarP');
Route::delete('deleteP/{id}','ProductosController@delete')->name('deleteP');
Route::get('productoS','ProductosController@list');
Route::get('crearP','ProductosController@crear');
Route::post('saveP','ProductosController@save')->name('saveP');
Route::get('revisarP/{id}','RevisionController@editar')->name('revisarP');
Route::put('savePR/{id}','RevisionController@update')->name('savePR');
//USUARIOS
Route::get('editarUsuario/{id}','UsuariosEditController@editar')->name('editarUsuario');
Route::patch('editU/{id}','UsuariosEditController@edit')->name('editU');
Route::get('buscar','ProductosController@index')->name('buscar');
Route::get('recibir','EstadosController@index')->name('recibir');
//productos anonimo
Route::get('mostrarp/{id}','CategoriasController@mostrarp')->name('mostrarp');
//cliente
Route::get('preguntarp/{id}','PreguntasController@form')->name('preguntarp');
Route::post('preguntar','PreguntasController@index')->name('preguntar');
Route::get('productosV','productosVController@list');
Route::get('Mproductos','MproductosController@list')->name('Mproductos');
Route::get('revision','RevisionController@index');
Route::patch('editM/{id}','MProductosController@edit')->name('editM');
Route::get('editarM/{id}','MProductosController@editar')->name('editarM');
Route::delete('deleteM/{id}','MProductosController@delete')->name('deleteM');
Route::get('crearM','MProductosController@crear');
Route::post('saveM','MProductosController@save')->name('saveM');
Route::get('calificarT','productosVController@calificarT')->name('calificarT');
Route::get('transaccion','productosVController@tran');
route::put('_Concesionar/{​​id}​​','EstadosController@Concesionado');

//
Route::get('vendedores','VendedorController@list');
//
Route::get('kardex/{id}','KardexController@list')->name('kardex');
Auth::routes();
//generales
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/supervisor','HomeController@getUser');
Route::get('/encargado','EncargadoController@index')->name('encargado');
Route::get('/cliente','ClienteController@index')->name('cliente');
Route::get('/contador','ContadorController@index')->name('contador');
Route::get('subcategoria/{id}','SubCategoriaController@list')->name('subcategoria');
Route::get('crearsub/{id}','SubCategoriaController@crear')->name('crearsub');
Route::post('saveSub','SubCategoriaController@saveSub')->name('saveSub');


Route::post('/register/check', 'EmailAvailable@check')->name('register.check');

