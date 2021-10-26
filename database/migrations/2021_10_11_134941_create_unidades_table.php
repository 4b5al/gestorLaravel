<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });
    
    //adicionando relacionamento com a tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->reference('id')->on('unidades'); //da coluna recem criada "foreign"- recebe coluna id "reference" - da tebela unidades "on"
        });
    //adicionando relaciomento coma tabela produtos_detalhes
        Schema::table('produtos_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->reference('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {//removendo realcionamento com a tabela produtos_detalhes
       Schema::table('produtos_detalhes', function(Blueprint $table){

        //removendo a foreignKey
            $table->dropForeign('produtos_detalhes_unidade_id_foreign');
        //removendo a colina unidades_id
            $table->dropColumn('unidade_id');

        });
    //removendo relacionamento da tabela produtos
        Schema::table('produtos', function(Blueprint $table){

        //removendo a foreignKey
            $table->dropForeign('produtos_unidade_id_foreign');
        //removendo a colina unidades_id
            $table->dropColumn('unidade_id');

        });

        Schema::dropExists('unidades');
    }
}
