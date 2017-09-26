<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsVagas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vagas', function (Blueprint $table){
            $table->string('cargo');
            $table->integer('quantidadeVagas');
            $table->string('salario')->nullable();
            $table->string('beneficios')->nullable();
            $table->string('local')->nullable();
            $table->string('diaSemana');
            $table->string('horario');
            $table->string('faixaEtaria')->nullable();
            $table->string('sexo');
            $table->string('tipo')->nullable();
            $table->string('cnhExigida')->nullable();
            $table->string('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vagas', function (Blueprint $table){
            $table->dropColumn('cargo');
            $table->dropColumn('quantidadeVagas');
            $table->dropColumn('salario');
            $table->dropColumn('beneficios');
            $table->dropColumn('local');
            $table->dropColumn('diaSemana');
            $table->dropColumn('horario');
            $table->dropColumn('faixaEtaria');
            $table->dropColumn('sexo');
            $table->dropColumn('tipo');
            $table->dropColumn('cnhExigida');
            $table->dropColumn('descricao');
        });
    }
}
