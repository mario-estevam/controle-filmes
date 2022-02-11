<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index(Request $request){

        $filmes = Filme::all();

       return view('filmes/index', compact('filmes'));

    }

    public function create()
    {
        return view('filmes.create');

    }

    public function store(Request $request)
    {
        $filme = Filme::create($request->all());

        echo "Série com id ($filme->id) criada: ($filme->nome)";

    }
}
