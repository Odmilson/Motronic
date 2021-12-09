<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaMecanico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecanico', function (Blueprint $table) {
            $table->increments('cod_mecanico');
            $table->string('nome_mecanico', 100);
            $table->string('cpf_mecanico', 11)->unique();
            $table->string('email_mecanico', 100)->unique();
            $table->string('celular_mecanico', 11);
            $table->string('telefone_mecanico', 10);
            $table->float('salario_mecanico', 8, 2);
            $table->date('nascimento_mecanico');
            $table->string('uf_mecanico', 2);
            $table->string('cep_mecanico', 8);
            $table->string('cidade_mecanico', 80);
            $table->string('bairro_mecanico', 80);
            $table->string('logradouro_mecanico', 100);
            $table->integer('numero_mecanico');
            $table->string('complemento_mecanico', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mecanico');
    }
}
