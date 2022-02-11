@extends('layout')
@section('titulo')
    Adicionar Filme
@endsection

@section('conteudo')


    <form method="post" class="mt-xl-5">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">

        </div>
        <button class="btn btn-primary mt-3" href="/filmes/insert">Adicionar</button>
    </form>
</div>

@endsection
