<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnsEmpresa extends Migration
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
            $table->string('razaoSocial')->nullable()->change();
            $table->string('cnpj')->nullable()->change();
            $table->string('nomeFantasia')->nullable()->change();
            $table->string('inscricaoMunicipal')->nullable()->change();
            $table->string('inscricaoEstadual')->nullable()->change();
            $table->string('descricao')->nullable()->change();
            
            //Pessoa Física
            $table->string('cpf')->nullable()->change();
            $table->string('nomeEmpregador')->nullable()->change();
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
            $table->string('razaoSocial')->nullable(false)->change();
            $table->string('cnpj')->nullable(false)->change();
            $table->string('nomeFantasia')->nullable(false)->change();
            $table->string('inscricaoMunicipal')->nullable(false)->change();
            $table->string('inscricaoEstadual')->nullable(false)->change();
            $table->string('descricao')->nullable(false)->change();
            
            //Pessoa Física
            $table->string('cpf')->nullable(false)->change();
            $table->string('nomeEmpregador')->nullable(false)->change();

        });
    }
}
