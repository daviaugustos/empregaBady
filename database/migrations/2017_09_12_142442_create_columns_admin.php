<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (BluePrint $table){ 
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (BluePrint $table){ 
            $table->dropColumn('nome');
            $table->dropColumn('email');
            $table->dropColumn('senha');
        });
    }
}
