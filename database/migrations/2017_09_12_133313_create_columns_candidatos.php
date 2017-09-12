<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsCandidatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidatos', function (BluePrint $table){
            //Dados pessoais
            $table->string('email');
            $table->string('senha');
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->date('dataExpedicao');
            $table->string('sexo');
            $table->date('dataNascimento');
            $table->string('telefone');
            $table->string('celular');
            $table->string('nomePai');
            $table->string('nomeMae');
            $table->string('escolaridade');
            $table->string('cnhCategorias');
            $table->string('cursos');
            $table->string('estadoCivil');
            $table->integer('quantidadeFilhos');

            //Dados do endereço
            $table->string('enderecoCep');
            $table->string('enderecoLogradouro');
            $table->string('enderecoNumero');
            $table->string('enderecoComplemento');
            $table->string('enderecoBairro');
            $table->string('enderecoCidade');
            $table->string('enderecoEstado');

            //Dados profissionais
            $table->string('nomeEmpresa1');
            $table->date('dataAdmissao1');
            $table->date('dataSaida1');
            $table->string('motivoSaida1');
            $table->string('cargo1');
            $table->string('atividadesRealizadas1');

            $table->string('nomeEmpresa2');
            $table->date('dataAdmissao2');
            $table->date('dataSaida2');
            $table->string('motivoSaida2');
            $table->string('cargo2');
            $table->string('atividadesRealizadas2');

            $table->string('nomeEmpresa3');
            $table->date('dataAdmissao3');
            $table->date('dataSaida3');
            $table->string('motivoSaida3');
            $table->string('cargo3');
            $table->string('atividadesRealizadas3');

            $table->string('cargoPretendido1');
            $table->string('cargoPretendido2');
            $table->string('cargoPretendido3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidatos', function (BluePrint $table){
            $table->dropColumn('email');
            $table->dropColumn('senha');
            $table->dropColumn('nome');
            $table->dropColumn('cpf');
            $table->dropColumn('rg');
            $table->dropColumn('dataExpedicao');
            $table->dropColumn('sexo');
            $table->dropColumn('dataNascimento');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
            $table->dropColumn('nomePai');
            $table->dropColumn('nomeMae');
            $table->dropColumn('escolaridade');
            $table->dropColumn('cnhCategorias');
            $table->dropColumn('cursos');
            $table->dropColumn('estadoCivil');
            $table->dropColumn('quantidadeFilhos');
            $table->dropColumn('enderecoCep');
            $table->dropColumn('enderecoLogradouro');
            $table->dropColumn('enderecoNumero');
            $table->dropColumn('enderecoComplemento');
            $table->dropColumn('enderecoBairro');
            $table->dropColumn('enderecoCidade');
            $table->dropColumn('enderecoEstado');

            $table->dropColumn('nomeEmpresa1');
            $table->dropColumn('dataAdmissao1');
            $table->dropColumn('dataSaida1');
            $table->dropColumn('motivoSaida1');
            $table->dropColumn('cargo1');
            $table->dropColumn('atividadesRealizadas1');

            $table->dropColumn('nomeEmpresa2');
            $table->dropColumn('dataAdmissao2');
            $table->dropColumn('dataSaida2');
            $table->dropColumn('motivoSaida2');
            $table->dropColumn('cargo2');
            $table->dropColumn('atividadesRealizadas2');

            $table->dropColumn('nomeEmpresa3');
            $table->dropColumn('dataAdmissao3');
            $table->dropColumn('dataSaida3');
            $table->dropColumn('motivoSaida3');
            $table->dropColumn('cargo3');
            $table->dropColumn('atividadesRealizadas3');

            $table->dropColumn('cargoPretendido1');
            $table->dropColumn('cargoPretendido2');
            $table->dropColumn('cargoPretendido3');
        });
    }
}
