<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnCandidatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidatos', function (Blueprint $table){
            //Dados pessoais
            $table->string('cpf');
            $table->string('rg');
            $table->date('dataExpedicao');
            $table->string('sexo');
            $table->date('dataNascimento');
            $table->string('nomePai');
            $table->string('nomeMae');
            $table->string('escolaridade');
            $table->string('cnhCategorias');
            $table->longText('cursos');
            $table->string('estadoCivil');
            $table->integer('quantidadeFilhos');

            //Dados do endereço
            $table->string('enderecoCep');
            $table->string('enderecoLogradouro');
            $table->string('enderecoNumero');
            $table->string('enderecoComplemento');
            $table->string('enderecoBairro');

            //Dados profissionais
            $table->string('nomeEmpresa1')->nullable();
            $table->date('dataAdmissao1')->nullable();
            $table->date('dataSaida1')->nullable();
            $table->string('cargo1')->nullable();
            $table->longText('atividadesRealizadas1')->nullable();

            $table->string('nomeEmpresa2')->nullable();
            $table->date('dataAdmissao2')->nullable();
            $table->date('dataSaida2')->nullable();
            $table->string('cargo2')->nullable();
            $table->longText('atividadesRealizadas2')->nullable();

            $table->string('nomeEmpresa3')->nullable();
            $table->date('dataAdmissao3')->nullable();
            $table->date('dataSaida3')->nullable();
            $table->string('cargo3')->nullable();
            $table->longText('atividadesRealizadas3')->nullable();

            $table->string('cargoPretendido1');
            $table->string('cargoPretendido2');
            $table->string('cargoPretendido3');

            $table->boolean('primeiroEmprego')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidatos', function (Blueprint $table){
            $table->dropColumn('cpf');
            $table->dropColumn('rg');
            $table->dropColumn('dataExpedicao');
            $table->dropColumn('sexo');
            $table->dropColumn('dataNascimento');
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

            $table->dropColumn('nomeEmpresa1');
            $table->dropColumn('dataAdmissao1');
            $table->dropColumn('dataSaida1');
            $table->dropColumn('cargo1');
            $table->dropColumn('atividadesRealizadas1');

            $table->dropColumn('nomeEmpresa2');
            $table->dropColumn('dataAdmissao2');
            $table->dropColumn('dataSaida2');
            $table->dropColumn('cargo2');
            $table->dropColumn('atividadesRealizadas2');

            $table->dropColumn('nomeEmpresa3');
            $table->dropColumn('dataAdmissao3');
            $table->dropColumn('dataSaida3');
            $table->dropColumn('cargo3');
            $table->dropColumn('atividadesRealizadas3');

            $table->dropColumn('cargoPretendido1');
            $table->dropColumn('cargoPretendido2');
            $table->dropColumn('cargoPretendido3');

            $table->dropColumn('primeiroEmprego');
        });
    }
}
