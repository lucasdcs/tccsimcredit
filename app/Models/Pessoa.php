<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $primaryKey = 'cpf_cnpj';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'cpf_cnpj',
        'nome_razao_social',
    ];

    public function dados_gerais()
    {
        return $this->hasMany(DadosGerais::class, 'pessoa_cpf_cnpj', 'cpf_cnpj');
    }

    public function enderecos()
    {
        return $this->hasMany(Endereco::class, 'pessoa_id', 'cpf_cnpj');
    }

    public function bens_patrimoniais()
    {
        return $this->hasMany(Bem::class, 'pessoa_id', 'cpf_cnpj');
    }

}
