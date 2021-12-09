<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaOrcamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->increments('cod_orcamento');
            $table->string('nome_orcamento', 100);
            $table->string('email_orcamento', 100);
            $table->string('veiculo_orcamento', 50);
            $table->year('ano_veiculo_orcamento');
            $table->string('celular_orcamento', 11)->nullable();
            $table->text('descricao_orcamento');
            $table->timestamp('data_criacao_orcamento');
            $table->timestamp('data_resposta_orcamento')->nullable();
            $table->float('valor_orcamento', 8, 2)->nullable();
            $table->string('prazo_orcamento', 50)->nullable();
            $table->string('status_orcamento', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamento');
    }
}
