<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->increments('cod_veiculo');
            $table->string('cor_veiculo', 30);
            $table->year('ano_veiculo');
            $table->text('placa_veiculo', 7);
            $table->integer('cod_modelo');
            $table->foreign('cod_modelo')->references('cod_modelo')->on('modelo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo');
    }
}
