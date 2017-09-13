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
    return view('welcome', ['name' => 'Harrison']);
});

Route::get('/prueba',function ()
{
return view('prueba', ['n1'  => '5']);
})->name('prueba');


Route::get('/home', 'ControladorBasico@metodo')->name('home');


