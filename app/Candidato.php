<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{   
    //Converte a data para o padrão requerido pela ISO 8601 utilizado pelo mysql
    function convertDateToDataBase($date){
        $mysqlFormattedDate = date("Y-m-d",strtotime(str_replace('/','-',$date)));
        return $mysqlFormattedDate;
    }

    function setDataExpedicaoAttribute($value){
        $this->attributes['dataExpedicao'] = $this->convertDateToDataBase($value);
    }

    function setDataNascimentoAttribute($value){
        $this->attributes['dataNascimento'] = $this->convertDateToDataBase($value);
    }

    function setDataAdmissao1Attribute($value){
        $this->attributes['dataAdmissao1'] = $this->convertDateToDataBase($value);
    }

    function setDataSaida1Attribute($value){
        $this->attributes['dataSaida1'] = $this->convertDateToDataBase($value);
    }

    function setDataAdmissao2Attribute($value){
        $this->attributes['dataAdmissao2'] = $this->convertDateToDataBase($value);
    }

    function setDataSaida2Attribute($value){
        $this->attributes['dataSaida2'] = $this->convertDateToDataBase($value);
    }

    function setDataAdmissao3Attribute($value){
        $this->attributes['dataAdmissao3'] = $this->convertDateToDataBase($value);
    }
    
    function setDataSaida3Attribute($value){
        $this->attributes['dataSaida3'] = $this->convertDateToDataBase($value);
    }

    function setPrimeiroEmpregoAttribute($value){
        $this->attributes['primeiroEmprego'] = ($value === "on") ? 1 : 0;
    }
}
