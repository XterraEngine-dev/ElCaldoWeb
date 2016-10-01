<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('app', function (){
    return view('app');
});
Route::get('caldos', function (){
    return view('caldos');
});
Route::get('tamales', function (){
    return view('tamales');
});
Route::get('postres', function (){
    return view('postres');
});
Route::get('bebidas', function (){
    return view('bebidas');
});
Route::get('cocinausuario', function (){
    return view('cocinausuario');
});
Route::get('search', function (){
    return view('search');
});


