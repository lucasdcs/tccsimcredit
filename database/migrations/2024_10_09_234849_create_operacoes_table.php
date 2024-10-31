<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacoesTable extends Migration
{
    public function up()
    {
        Schema::create('operacoes', function (Blueprint $table) {
            $table->id();
            $table->string('pessoa_cpf_cnpj', 14)->nullable();
            $table->foreign('pessoa_cpf_cnpj')->references('cpf_cnpj')->on('pessoas')->onDelete('set null');
            $table->bigInteger('numero')->unique()->nullable();
            $table->timestamp('data_criacao')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('operacoes');
    }
}


