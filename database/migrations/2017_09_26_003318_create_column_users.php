<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('telefone');
            $table->string('celular');
            $table->string('enderecoCidade');
            $table->string('enderecoEstado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('name');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
            $table->dropColumn('enderecoCidade');
            $table->dropColumn('enderecoEstado');
        });
    }
}
