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

Route::resource('/','WlcomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/lista/usuarios','UsuarioController');
Route::get('/buscar/{id}','WlcomeController@busquedaProductosWl')->name('buscar');
Route::get('/prudcuto/encontrado','WlcomeController@barraSearchWl')->name('encontrar');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('/Supervisor','SupervisorController');
Route::post('/Supervisor/agregar/producto/','SupervisorController@agregandoProducto')->name('insertar');
Route::get('/Supervisor/agrega/producto','SupervisorController@agregaProducto')->name('agregar');
Route::get('/Supervisor/usuarios/registrados','SupervisorController@usuariosRegt')->name('usuariosRegistrados');
Route::get('/Supervisor/usuarios/Editar/{id}','SupervisorController@editarUsuario')->name('editarUsuario');
Route::put('/Supervisor/usuarios/Update/{id}','SupervisorController@updateUsuario')->name('updateUsuario');
Route::get('Supervisor/usuarios/catalogo','SupervisorController@catalogo')->name('catalogo');
Route::get('Supervisor/prductos/Pagos','SupervisorController@pagos')->name('pagos');
Route::get('Supervisor/prductos/revisar/{id}','SupervisorController@revisarPago')->name('revisarPago');
Route::get('Supervisor/prductos/aceptar/{id}','SupervisorController@aceptar')->name('aceptar');
Route::resource('/Categorias/lista','CategoriasController');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('/Productos/ventas','ProductosController');
Route::get('/Productos/ventas/Buscar/{id}','ProductosController@busquedaProductos')->name('buscarProductos');
Route::get('/Productos/ventas/Producto/encontrado','ProductosController@barraSearch');
Route::get('/Productos/ventas/Mis/productos','ProductosController@misProductos')->name('misProductos');
Route::get('/Productos/ventas/rechazados/{id}','ProductosController@procutoRechazado')->name('procutoRechazado');
Route::get('/Mi/HistorialCompras','VentasController@misCompras')->name('misCompras');
Route::get('/Mi/HistorialVentas','VentasController@misVentas')->name('misVentas');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('Encargado/Lista/Productos/consignas','EncargadoController');
Route::get('Encargado/Lista/Productos/categorias','EncargadoController@categorias')->name('categoriasProductos');
Route::get('Encargado/Lista/Usuarios','EncargadoController@restablecerContraseña')->name('usuarios');
Route::get('Encargado/Lista/password/{id}','EncargadoController@password')->name('password');

Route::get('Encargado/Lista/Productos/consignas/Denegada/{id}','EncargadoController@aceptarProducto')->name('aceptarProducto');
Route::get('Encargado/Lista/Productos/consignas/Denegada/Rechazar/{id}','EncargadoController@rechazarProducto')->name('rechazarProducto');
Route::get('Encargado/Lista/Productos/consignas/Denegada/Motivo/{id}','EncargadoController@motivo')->name('motivo');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('/Productos/Compras','VentasController');
Route::get('/Productos/Compras/create/{id}','VentasController@create')->name('iniciarVenta');
Route::post('/Productos/Compras/store/{id}','VentasController@store')->name('creaCompra');
Route::get('/Productos/Compras/pago/{id}','VentasController@pago')->name('pago');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/Producto/Preguntas/{id}','PreguntasController@index')->name('indexPreguntas');
Route::get('/Producto/Hacer/Pregunta/{id}/{interesado}','PreguntasController@create')->name('hacerPregunta');
Route::get('/Producto/Enviar','PreguntasController@store')->name('enviarPregunta');
Route::resource('/producto/Responder','PreguntasController');
Route::get('/producto/Respuesta/{id}','PreguntasController@respuesta')->name('enviasRespuesta');
