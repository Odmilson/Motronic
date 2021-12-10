<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaServicoPeca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_peca', function (Blueprint $table) {
            $table->integer('ordem_servico');
            $table->integer('cod_peca');
            $table->foreign('ordem_servico')->references('ordem_servico')->on('servico');
            $table->foreign('cod_peca')->references('cod_peca')->on('peca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servico_peca');
    }
}
