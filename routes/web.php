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

/**
 * PAGINA DE INICIO
 */

Route::get('/', function () {
    return view('welcome');
});


/**
 * INICIO DE APP WEB
 */
Route::get('app', function (){
    return view('app');
});


/**
 * CALDOS
 */

Route::get('caldos', 'CaldosController@index');
Route::get('caldos/{id}',[

    'uses' => 'CaldosController@show',
    'as' => 'caldos_show_path'

]);

/**
 * TAMALES
 */


Route::get('tamales', 'TamalesController@index');
Route::get('tamales/{id}',[

    'uses' => 'TamalesController@show',
    'as' => 'tamales_show_path'

]);

/**
 * POSTRES
 */


Route::get('postres', 'PostresController@index');
Route::get('postres/{id}',[

    'uses' => 'PostresController@show',
    'as' => 'postres_show_path'

]);



/**
 * BEBIDAS
 */


Route::get('bebidas', 'BebidasController@index');
Route::get('bebidas/{id}',[

    'uses' => 'BebidasController@show',
    'as' => 'bebidas_show_path'

]);


/**
 * COCINA USUARIO
 */

Route::get('timeline', 'CocinausuarioController@index');
Route::get('timeline/{id}',[

    'uses' => 'CocinausuarioController@show',
    'as' => 'cocinausuario_show_path'

]);

/**
 * BUSCAR
 */

Route::get('search', function (){
    return view('search');
});



