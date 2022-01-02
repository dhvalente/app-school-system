@extends('layout')

@section('cabecalho')
    Lista de Alunos
@endsection
@section('conteudo')

    <form div class="container mb-3">

        <div class="card mb-4 mt-4 ">
            <div class="card-body">
                <b> <font size="6">Lista de Alunos</font></b>
            </div>
        </div>
    </form>


    <a href="/cadastraralunos" class="btn btn-dark mr-5 ml-5 mb-2">Adicionar</a>

    <ul class="list-group mr-5 ml-5">
        @foreach ($CadastroAlunos as $CadastroAlunos)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $CadastroAlunos->nome }}
                {{ $CadastroAlunos->sobrenome }}
                <form method="post" action="/cadastraralunos/remover/{{$CadastroAlunos->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $CadastroAlunos->nome)}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                </form>
            </li>
        @endforeach
    </ul>

@endsection('conteudo')
