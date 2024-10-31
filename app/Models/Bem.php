<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bem extends Model
{
    protected $table = 'bens'; // Nome da tabela no banco de dados
    protected $fillable = [
        'pessoa_id',
        'descricao',
        'tipo_bem',
        'quantidade',
        'porcentagem',
        'valor',
        'data_atualizacao',
        'status'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function __toString()
    {
        return $this->tipo_bem;
    }
}
