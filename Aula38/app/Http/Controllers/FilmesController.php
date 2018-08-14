<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class FilmesController extends Controller
{
    public function procurarFilmeId($id){
      $filme = Movie::find($id);

      $nome = $filme->title;

          return view('filmesNome')->with("filme", $nome);
    }

    public function procurarFilmeNome($nome){
      $filme = Movie::where('title', '=', $nome)->first();

      if ($filme) {
        $achou = $filme["title"];
        return view("filmesNome")-> with("nomeFilme", $achou);
      } else {
        $achou = "Filme não encontrado";
        return $achou;
      }

    }

    public function add(Request $request){
      $validou = $this->validate($request, [
        'title' => "required|unique:movies|max:255",
        'rating' => "required|numeric",
        'awards' => "required|numeric",
        'length' => "required|numeric"
      ]);
      if($validou){
        $filme = Movie::create([
          'title' => $request->input('title'),
          'rating'=> $request->input('rating'),
          'awards'=> $request->input('awards'),
          'length'=> $request->input('length'),
          'release_date'=> '1999-02-05'
        ]);
        $filme->save();
        return "Tá sentindo? Então, foi";
      }
      else{
        return "Não foi dessa vez, sory";
      }

    }
}
