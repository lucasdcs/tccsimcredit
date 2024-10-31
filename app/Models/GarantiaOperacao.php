<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GarantiaOperacao extends Model
{
    protected $table = 'garantia_operacoes'; // Nome da tabela no banco de dados
    protected $fillable = [
        'contrato_id',
        'cpf_garantidor_id',
        'tipo_garantia',
        'garantia',
        'nome_garantidor',
        'valor'
    ];

    public function contrato()
    {
        return $this->belongsTo(OperacaoCredito::class, 'contrato_id');
    }

    public function garantidor()
    {
        return $this->belongsTo(Pessoa::class, 'cpf_garantidor_id');
    }

    public function __toString()
    {
        return "Garantida: Contrato: {$this->contrato}, Tipo Garantia: {$this->tipo_garantia}";
    }
}
