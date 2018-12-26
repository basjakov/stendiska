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


Route::get('/','girlcontroller@girls');

Route::get('/show/{id}','girlcontroller@show');

Route::get('/tasks','tutcontrolletr@show');

Route::get('/addgirl','girlcontroller@newgirl');
Route::post('/addgirl','girlcontroller@store');





