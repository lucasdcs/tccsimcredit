<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperacaoCredito extends Model
{
    protected $table = 'operacao_credito'; // Nome da tabela no banco de dados
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'numero_contrato',
        'pessoa_id',
        'situacao_contrato',
        'linha_credito',
        'modalidade',
        'risco',
        'data_operacao',
        'taxa_operacao',
        'valor_operacao',
        'valor_saldo_devedor',
        'valor_medio_parcelas',
        'quantidade_parcelas',
        'quantidade_parcelas_abertas',
        'quantidade_dias_atraso_parcela',
        'quantidade_parcelas_pagas',
        'situacao_conta_cartao',
        'funcao_cartao'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function isPrejuizoOrAtraso()
    {
        return str_contains($this->modalidade, 'PREJUIZO') || $this->quantidade_dias_atraso_parcela > 0;
    }

    public function __toString()
    {
        return (string)$this->numero_contrato;
    }
}
