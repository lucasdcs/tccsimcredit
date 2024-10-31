@include('shared.Head')
</head>

<body>
    @include('shared.Navbar')
    @include('shared.Sidebar')

    <main id="article_show" style="padding-top: 66px">
        <form method="GET" action="{{ route('ListarOperacoes') }}">
            <section class="section_cabecalho">
                <article class="article_table_operacao">
                    <label class="label-principal">CPF/CNPJ</label>
                    <input type="text" id="cpfcnpj" name="cpfcnpj" class="input_cabecalho" value="{{ request()->get('cpfcnpj') }}">
                </article>
                <article class="article_table_operacao">
                    <label class="label-principal">Nome</label>
                    <input type="text" id="nome" name="nome" class="input_cabecalho" value="{{ request()->get('nome') }}">
                </article>
                <article class="article_table_operacao">
                    <label class="label-principal">Proposta</label>
                    <input type="text" id="operacao" name="operacao" class="input_cabecalho" value="{{ request()->get('operacao') }}">
                </article>
                <article class="article_table_operacao">
                    <label class="label-principal">Data Inicial</label>
                    <input type="date" id="data_inicial" name="data_inicial" class="input_cabecalho" value="{{ request()->get('data_inicial') }}">
                </article>
                <article class="article_table_operacao">
                    <label class="label-principal">Data Final</label>
                    <input type="date" id="data_final" name="data_final" class="input_cabecalho" value="{{ request()->get('data_final') }}">
                </article>
                <article>
                    <button id="article_button" type="submit">Pesquisar</button>
                </article>
            </section>
        </form>

        <section class="section_table">
            <article class="article_table">
                <table class="table_operacao_total">
                    <tr class="tr_table_operacao">
                        <th class="th_table_operacao">CPF/CNPJ</th>
                        <th class="th_table_operacao">Nome</th>
                        <th class="th_table_operacao">Proposta</th>
                        <th class="th_table_operacao">Data Criação</th>
                        <th class="th_table_operacao">Ação</th>
                    </tr>
                    @foreach ($operacoes as $operacao)
                        <tr class="clickable-row" data-href="{{ route('operacao.analise', $operacao->id) }}">
                            <td class="td_table_operacao">{{ $operacao->pessoa->cpf_cnpj ?? 'N/A' }}</td>
                            <td class="td_table_operacao">{{ $operacao->pessoa->nome_razao_social ?? 'N/A' }}</td>
                            <td class="td_table_operacao">{{ $operacao->numero }}</td>
                            <td class="td_table_operacao">{{ $operacao->data_criacao }}</td>
                            <td class="td_table_operacao">
                                <form action="{{ route('operacoes.destroy', $operacao->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta operação?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-excluir">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </article>
        </section>
    </main>

    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/manager.js') }}"></script>
</body>
</html>
