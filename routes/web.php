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
// Route::get('/', function(){
//     return view('inicio');
// });
Route::get('/',function(){
    return view('inicio');
});
Route::get('/productos',function(){
    return view('productos');
});
Route::get('/acercaDe',function(){
    return view('acercaDe');
});
Route::get('/registro',function(){
    return view('registro');
});
Route::get('/registrarse',function (){
    return view('registrarse');
});
Route::post('acercaDe',('contactController@store'))->name('acercaDe');

