<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas';
    
    protected $fillable = [
        'cargo', 'quantidadeVagas', 'salario', 'beneficios', 'local', 'diaSemana', 'horario', 
        'faixaEtaria', 'sexo',  'tipo', 'cnhExigida',  'descricao', 'status'
    ];
}
