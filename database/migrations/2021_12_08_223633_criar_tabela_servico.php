<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico', function (Blueprint $table) {
            $table->increments('ordem_servico');
            $table->string('status_servico', 100);
            $table->float('valor_servico', 8, 2);
            $table->timestamp('data_entrada_servico');
            $table->timestamp('data_saida_servico')->nullable();
            $table->integer('km_entrada_servico');
            $table->integer('km_saida_servico')->nullable();
            $table->integer('cod_cliente');
            $table->integer('cod_veiculo');
            $table->integer('cod_mecanico');
            $table->integer('cod_peca')->nullable();
            $table->integer('cod_orcamento')->nullable();
            $table->foreign('cod_cliente')->references('cod_cliente')->on('cliente');
            $table->foreign('cod_veiculo')->references('cod_veiculo')->on('veiculo');
            $table->foreign('cod_mecanico')->references('cod_mecanico')->on('mecanico');
            $table->foreign('cod_peca')->references('cod_peca')->on('peca');
            $table->foreign('cod_orcamento')->references('cod_orcamento')->on('orcamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servico');
    }
}
