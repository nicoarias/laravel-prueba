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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/plantilla', function () {
    return view('plantilla_admin');
});
*/
Route::get('/plantilla', function () {
    return view('plantilla');
});

Route::get('/eliminar_empleados', function () {
    return view('empleados.eliminar_empleados');
});

Route::get('/modificar_datos', function () {
    return view('empleados.modificar_datos');
});
