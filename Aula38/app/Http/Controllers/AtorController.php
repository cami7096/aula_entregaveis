<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class AtorController extends Controller
{
    public function directory(){
      $atores = Actor::all();
      return view('atores')->with("atores", $atores);
    }

    public function show($id){
      $ator = Actor::find($id);
      return view('ator')->with("ator", $ator);
    }
}
