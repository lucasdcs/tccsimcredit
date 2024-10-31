<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Operacao;
use App\Models\Pessoa;
use App\Models\DadosGerais;

class OperacaoSeeder extends Seeder
{
    public function run()
    {
        // Primeira Pessoa
        $pessoa1 = Pessoa::create([
            'cpf_cnpj' => '12345678903',
            'nome_razao_social' => 'Nome Exemplo 1',
        ]);

        DadosGerais::create([
            'pessoa_cpf_cnpj' => $pessoa1->cpf_cnpj,
            'data_nascimento_constituicao' => now(),
            'nome_fantasia' => 'Nome Fantasia 1',
            'profissao' => 'Profissão Exemplo 1',
            'codigo_cnae' => '12345678',
            'cnae' => 'CNAE Exemplo 1',
            'porte' => 'Porte Exemplo 1',
            'atividade_economica' => 'Atividade Econômica Exemplo 1',
            'pa' => 'PA 1',
            'nome_pa' => 'Nome PA 1',
            'data_atualizacao_cadastral' => now(),
            'estado_civil' => 'Solteiro',
            'regime_bens' => 'Comunhão Parcial',
        ]);

        Operacao::create([
            'pessoa_cpf_cnpj' => $pessoa1->cpf_cnpj,
            'numero' => 1001,
            'data_criacao' => now()
        ]);

        // Segunda Pessoa
        $pessoa2 = Pessoa::create([
            'cpf_cnpj' => '98765432101',
            'nome_razao_social' => 'Nome Exemplo 2',
        ]);

        DadosGerais::create([
            'pessoa_cpf_cnpj' => $pessoa2->cpf_cnpj,
            'data_nascimento_constituicao' => now(),
            'nome_fantasia' => 'Nome Fantasia 2',
            'profissao' => 'Profissão Exemplo 2',
            'codigo_cnae' => '87654321',
            'cnae' => 'CNAE Exemplo 2',
            'porte' => 'Porte Exemplo 2',
            'atividade_economica' => 'Atividade Econômica Exemplo 2',
            'pa' => 'PA 2',
            'nome_pa' => 'Nome PA 2',
            'data_atualizacao_cadastral' => now(),
            'estado_civil' => 'Casado',
            'regime_bens' => 'Separação Total',
        ]);

        Operacao::create([
            'pessoa_cpf_cnpj' => $pessoa2->cpf_cnpj,
            'numero' => 1002,
            'data_criacao' => now()
        ]);
    }
}
