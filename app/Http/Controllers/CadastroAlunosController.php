<?php

namespace App\Http\Controllers;

use App\Models\CadastroAlunos;
use Illuminate\Http\Request;

class CadastroAlunosController extends Controller
{
    public function Create()
    {
        return view('Cadastros/alunos');
    }

    public function Store(Request $request)
    {
        $CadastroAlunos = new CadastroAlunos();
        $CadastroAlunos -> nome = $request ->nome;
        $CadastroAlunos -> sobrenome = $request ->sobrenome;
        $CadastroAlunos -> turma = $request ->turma;
        $CadastroAlunos -> save();

        return redirect('/index');
    }

    public function destroy(Request $request)
    {
        CadastroAlunos::destroy($request->id);
        return redirect('/listaralunos');
    }

    public function listarAlunos()
    {
        $CadastroAlunos = CadastroAlunos::query()->orderBy('nome')->get();
        return view('Relatorios.alunos' , compact('CadastroAlunos'));
    }
}
