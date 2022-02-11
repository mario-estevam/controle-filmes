@extends('layout')
@section('titulo')
    Lista Filmes
@endsection

@section('conteudo')

    <a href="/filmes/create" class="btn btn-dark mb-2 mt-xl-3">Adicionar</a>

    <ul class="list-group">
        @foreach($filmes as $filme)
            <li class="list-group-item">{{ $filme->nome }}</li>
        @endforeach
    </ul>

@endsection
