<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function (BluePrint $table){
            $table->string('email');
            $table->string('senha');
            $table->string('empregadorNome');
            $table->string('empregadorCpf');
            $table->string('empregadorTelefone');
            $table->string('empregadorCelular');
            $table->string('contatoNome');
            $table->string('contatoTelefone');
            $table->string('cidade');
            $table->string('estado');
            $table->string('razaoSocial');
            $table->string('cnpj');
            $table->string('nomeFantasia');
            $table->string('inscricaoMunicipal');
            $table->string('inscricaoEstadual');
            $table->string('descricaoEmpresa');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('email');
        $table->dropColumn('senha');
        $table->dropColumn('empregadorNome');
        $table->dropColumn('empregadorCpf');
        $table->dropColumn('empregadorTelefone');
        $table->dropColumn('empregadorCelular');
        $table->dropColumn('contatoNome');
        $table->dropColumn('contatoTelefone');
        $table->dropColumn('cidade');
        $table->dropColumn('estado');
        $table->dropColumn('razaoSocial');
        $table->dropColumn('cnpj');
        $table->dropColumn('nomeFantasia');
        $table->dropColumn('inscricaoMunicipal');
        $table->dropColumn('inscricaoEstadual');
        $table->dropColumn('descricaoEmpresa');
    }
}
