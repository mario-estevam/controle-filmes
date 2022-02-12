<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Http\Requests\FilmeFormRequest;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index(Request $request){

        $filmes = Filme::query() -> orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

       return view('filmes/index', compact('filmes','mensagem'));

    }

    public function create()
    {
        return view('filmes.create');

    }

    public function store(FilmeFormRequest $request)
    {

       Filme::create($request->all());
       $request->session()
           ->flash
           ('mensagem',
               'Filme criado com sucesso');

        return redirect()->route('listar-filmes');

    }

    public function destroy(Request $request)
    {
        Filme::destroy($request->id);
        $request->session()
            ->flash
            ('mensagem',
                'Filme deletado com sucesso');

        return redirect()->route('listar-filmes');

    }
}
