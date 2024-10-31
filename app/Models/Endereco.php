<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos'; // Nome da tabela no banco de dados
    protected $fillable = [
        'pessoa_id',
        'tipo_logradouro',
        'logradouro',
        'numero_logradouro',
        'bairro',
        'complemento',
        'municipio',
        'uf'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function __toString()
    {
        return $this->logradouro;
    }
}
