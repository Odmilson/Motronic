<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('cod_cliente');
            $table->string('nome_cliente', 100);
            $table->string('cpf_cliente', 11)->unique();
            $table->string('email_cliente', 100)->unique();
            $table->string('celular_cliente', 11);
            $table->string('telefone_cliente', 10);
            $table->date('nascimento_cliente');
            $table->string('uf_cliente', 2);
            $table->string('cep_cliente', 8);
            $table->string('cidade_cliente', 80);
            $table->string('bairro_cliente', 80);
            $table->string('logradouro_cliente', 100);
            $table->integer('numero_cliente');
            $table->string('complemento_cliente', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
