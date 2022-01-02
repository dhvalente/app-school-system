
@extends('layout')
@section('cabecalho')
Cadastro de Fornecedor
@endsection('cabecalho')
@section('conteudo')



<form method="post" div class="container mb-3">
    @csrf

    <div class="card mb-4 mt-4 ">

        <div class="card-body">
            <b> <font size="6">Cadastro de Alunos</font></b>
        </div>
    </div>

    <div class="row mb-3 ">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome do Aluno" name="nome" id="nome">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Sobrenome do Aluno" name="sobrenome" id="sobrenome">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Turma do Aluno" name="turma" id="turma">
        </div>
    </div>

    <input class="btn btn-primary mt-2 btn-lg" type="submit" value="Cadastrar ">
</form>



@endsection('counteudo')

