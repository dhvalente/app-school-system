<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroNotas extends Model
{
    use HasFactory;
    protected $table = 'cadastro_notas';
    public $timestamps = true;

    public function alunos()
    {
        return $this->belongsTo(CadastroAlunos::class);
    }
}
