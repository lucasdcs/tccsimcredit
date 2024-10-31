<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosGerais extends Model
{
    use HasFactory;

    protected $table = 'dados_gerais';
    protected $fillable = [
        'pessoa_cpf_cnpj',
        'data_nascimento_constituicao',
        'nome_fantasia',
        'profissao',
        'codigo_cnae',
        'cnae',
        'porte',
        'atividade_economica',
        'pa',
        'nome_pa',
        'data_atualizacao_cadastral',
        'estado_civil',
        'regime_bens',
        'margem_contribuicao',
        'iap',
        'quadrante',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_cpf_cnpj', 'cpf_cnpj');
    }
}
