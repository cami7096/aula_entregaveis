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

//Aula 35

Route::get('resultado/{numero}/opcional/{novoNumero?}', function($numero, $novoNumero = null){
  if ($novoNumero) {
      return $numero * $novonumero;
  }
  else {
    if ($numero % 2 == 0) {
      return "É par";
    }
    else {
      return "É impar";
    }
  }
});

Route::get('caminho/{novo?}', function($novo = null){
  if($novo){
    return "Olá, pessoa";
  }
  else {
    return redirect('/');
  }
});

//Aula 36

Route::get('procurarFilmeId/{id}', "FilmesController@procurarFilmeId");

Route::get('filmes/procurar/{nome}', "FilmesController@procurarFilmeNome");

//Aula 37

Route::get('atores', "AtorController@directory");

Route::get('ator/{id}', "AtorController@show");


//Aula 38

Route::get('form', function(){
  return view('form');
});

Route::get('formActor', function(){
  return view('formActor');
});

Route::post('form', "FilmesController@add");

Route::post('formActor', "AtorController@add");
