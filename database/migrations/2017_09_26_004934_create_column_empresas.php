<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function (Blueprint $table){
            //Pessoa Juridica
            $table->string('razaoSocial');
            $table->string('cnpj');
            $table->string('nomeFantasia');
            $table->string('inscricaoMunicipal');
            $table->string('inscricaoEstadual');
            $table->longText('descricao');
            
            //Pessoa Física
            $table->string('cpf');
            $table->string('nomeEmpregador');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresas', function (Blueprint $table){
            //Pessoa Juridica
            $table->dropColumn('razaoSocial');
            $table->dropColumn('cnpj');
            $table->dropColumn('nomeFantasia');
            $table->dropColumn('inscricaoMunicipal');
            $table->dropColumn('inscricaoEstadual');
            $table->dropColumn('descricao');
            
            //Pessoa Física
            $table->dropColumn('cpf');
            $table->dropColumn('nomeEmpregador');

        });
    }
}
