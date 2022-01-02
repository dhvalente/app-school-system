@extends('layout')

@section('cabecalho')
    Lista de Alunos
@endsection
@section('conteudo')

    <form div class="container mb-3" method="post">
        @csrf


        <div class="card mb-4 mt-4 ">
            <div class="card-body">
                <b> <font size="6">Cadastrar Notas</font></b>
            </div>
        </div>
        <ul class="list-group mr-5 ml-5">
            @foreach ($exibealuno as $exibealuno)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $exibealuno->nome }}
                    {{ $exibealuno->sobrenome }}

                    <div class="row mb-3 ">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nota 1º Trismestre" name="nota1" id="nota1">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nota 3º Trismestre" name="nota2" id="nota2">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nota 3º Trismestre" name="nota3" id="nota3">
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="container mt-4">
            <input class="btn btn-success " type="submit" value="Salvar">
        </div>
    </form>
@endsection('conteudo')
