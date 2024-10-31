<?php

namespace App\Http\Controllers;

use App\Models\Operacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pessoa;


class AnaliseController extends Controller
{
    public function show($operacao_id)
    {
        $operacao = Operacao::with(['pessoa.dados_gerais'])->find($operacao_id);
        
        if (!$operacao || !$operacao->pessoa) {
            return redirect()->back()->withErrors('Operação ou pessoa não encontrada.');
        }
    
        $pessoa = $operacao->pessoa;
        $dadosGerais = $pessoa->dados_gerais->first();
    
        return view('MostrarPessoa', compact('operacao', 'pessoa', 'dadosGerais'));
    }
    
}