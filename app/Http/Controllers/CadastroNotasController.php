<?php

namespace App\Http\Controllers;

use App\Models\CadastroNotas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroNotasController extends Controller
{
    public function Create()
    {


        $exibealuno = DB::select('SELECT *
FROM `lista_de_chamada`.`cadastro_alunos`;
');
        return view('Cadastros.notas' , compact('exibealuno') );
    }

    public function Store(Request $request)
    {
        $CadastroNotas = new CadastroNotas();
        $CadastroNotas -> nota1 = $request ->nota1;
        $CadastroNotas -> nota2 = $request ->nota2;
        $CadastroNotas -> nota3 = $request ->nota3;
        $CadastroNotas -> save();

        return redirect('/index');
    }


}
