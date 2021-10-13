<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFonecedorsNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //acrescentando colinas
        Schema::table('fornecedors', function (Blueprint $table){
            $table->string('uf', 21);
            $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //removendo colunas
        Schema::table('fornecedors', function (Blueprint $table){
            $table->dropColumn(['uf', 'email']);
        });
    }
}
