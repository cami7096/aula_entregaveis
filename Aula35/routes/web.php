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
