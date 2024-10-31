<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosGeraisTable extends Migration
{
    public function up()
    {
        Schema::create('dados_gerais', function (Blueprint $table) {
            $table->id();
            $table->string('pessoa_cpf_cnpj', 14);
            $table->foreign('pessoa_cpf_cnpj')->references('cpf_cnpj')->on('pessoas')->onDelete('restrict');
            $table->timestamp('data_nascimento_constituicao')->nullable();
            $table->string('nome_fantasia', 255)->nullable();
            $table->string('profissao', 255)->nullable();
            $table->string('codigo_cnae', 8)->nullable();
            $table->string('cnae', 255)->nullable();
            $table->string('porte', 255)->nullable();
            $table->string('atividade_economica', 255)->nullable();
            $table->string('pa', 3)->nullable();
            $table->string('nome_pa', 255)->nullable();
            $table->timestamp('data_atualizacao_cadastral');
            $table->string('estado_civil', 255)->nullable();
            $table->string('regime_bens', 255)->nullable();
            $table->float('margem_contribuicao')->nullable();
            $table->integer('iap')->nullable();
            $table->float('quadrante')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dados_gerais');
    }
}

