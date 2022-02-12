@extends('layout')
@section('titulo')
    Lista Filmes
@endsection

@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="{{ route('form-criar-filme')}}" class="btn btn-dark mb-2 mt-xl-3">Adicionar</a>

    <ul class="list-group ">
        @foreach($filmes as $filme)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{ $filme->nome }}
                <form method="post" action="/filmes/{{ $filme->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $filme->nome )}}?')">
                @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>

@endsection
