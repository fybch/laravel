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

Route::group(['prefix' => 'Aula'], function(){

    Route::get('/1',function(){
        return '<form method="GET" action="imc"> 
        <input type="text" name="peso" placeholder="digite seu peso">
        <input type="text" name="altura" placeholder="Digite sua altura">

        <input type="text" name="idade" placeholder="digite sua idade">
        <input type="text" name="nome" placeholder="Digite seu nome">

         <button type="submit">Enviar</button>
         </form>';
    });
    Route::get('/imc', 'Controller@IMC');     


    Route::get('/2',function(){
        return '<form method="GET" action="soma"> 
        <input type="text" name="n1" placeholder="Numero 1">
        <input type="text" name="n2" placeholder="Numro 2">

         <button type="submit">Enviar</button>
         </form>';
    });

    Route::get('/soma', 'Controller@somar');

    Route::get('/3',function(){
        return '<form method="GET" action="calculo"> 
        <input type="text" name="base" placeholder="Base">
        <input type="text" name="exp" placeholder="Potencia">

         <button type="submit">Enviar</button>
         </form>';
    });

    Route::get('/calculo', 'Controller@calcular');




});


