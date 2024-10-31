<?php

namespace App\Http\Controllers;

use App\Models\Operacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pessoa;


class OperacoesController extends Controller
{
    public function index(Request $request)
    {
        $query = Operacao::with('pessoa');

        if ($request->has('cpfcnpj')) {
            $query->whereHas('pessoa', function($q) use ($request) {
                $q->where('cpf_cnpj', 'like', '%' . $request->input('cpfcnpj') . '%');
            });
        }

        if ($request->has('nome')) {
            $query->whereHas('pessoa', function($q) use ($request) {
                $q->where('nome_razao_social', 'like', '%' . $request->input('nome') . '%');
            });
        }

        if ($request->has('operacao')) {
            $query->where('numero', 'like', '%' . $request->input('operacao') . '%');
        }

        if ($request->filled('data_inicial')) {
            $dataInicial = $request->input('data_inicial') . ' 00:00:00';
            $query->where('data_criacao', '>=', $dataInicial);
        }

        if ($request->filled('data_final')) {
            $dataFinal = $request->input('data_final') . ' 23:59:59';
            $query->where('data_criacao', '<=', $dataFinal);
        }

        $operacoes = $query->paginate(10);
        return view('ListarOperacoes', compact('operacoes'));
    }

    public function create(){
        $pessoas = Pessoa::select('cpfcnpj');
        return view('CriarOperacoes', compact('pessoas'));
    }

    public function store(Request $request)
    {
        try{
            Operacao::create($request->all());
        } catch (\Exception $th) {
            session()->flash('error', 'Erro relizar operação.');
            return redirect()->back()->withInput($request->all());
          }
        return redirect()->route('ListarOperacoes');
    }

    public function destroy(int $id)
    {
        $operacao = Operacao::findOrFail($id);
        try {
            $operacao->delete();
            session()->flash('success', 'Operação deletada com sucesso.');
        } catch (\Exception $e) {
            session()->flash('error', 'Erro ao excluir operação.');
            return redirect()->back();
        }
        return redirect()->route('ListarOperacoes');
    }
}
