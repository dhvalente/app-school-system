<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroAlunos extends Model
{
    use HasFactory;
    protected $table = 'cadastro_alunos';
    public $timestamps = true;

    public function notas()
    {
        return $this->hasMany(CadastroNotas::class);
    }
}

