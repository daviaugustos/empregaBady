<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [
        'cargo', 'quantidadeVagas', 'cargo', 'salario', 'beneficios', 'local', 'diaSemana', 'horario', 
        'faixaEtaria', 'sexo',  'tipo', 'cnhExigida',  'descricao',
    ];
}
