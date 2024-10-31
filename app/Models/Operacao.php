<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
    use HasFactory;

    protected $table = 'operacoes';

    protected $fillable = [
        'pessoa_cpf_cnpj',
        'numero',
        'data_criacao'
    ];

    protected $dates = ['data_criacao'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_cpf_cnpj', 'cpf_cnpj');
    }
}

