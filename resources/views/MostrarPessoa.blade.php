@include('shared.Head')
</head>

<body>
    @include('shared.Navbar')
    @include('shared.Sidebar')

    <main id="article_show" style="padding-top: 66px">
        <article class="dados_cooperado">
            <div class="style">
                <label class="label-principal">CPF</label>
                <input type="text" id="cpfcnpj" class="form_cooperado" value="{{ isset($pessoa->cpf_cnpj) ? $pessoa->cpf_cnpj : '--' }}" readonly>
            </div>
            <div class="style" style="grid-column: span 2;">
                <label class="label-principal">Nome Cooperado</label>
                <input type="text" id="nome_cooperado" class="form_cooperado" value="{{ isset($pessoa->nome_razao_social) ? $pessoa->nome_razao_social : '--' }}" readonly>
            </div>
            <div class="style">
                <label class="label-principal">Data de Nascimento</label>
                <input type="text" id="data_nascimento" class="form_cooperado" value="{{ isset($dadosGerais->data_nascimento_constituicao) ? \Carbon\Carbon::parse($dadosGerais->data_nascimento_constituicao)->format('d/m/Y') : '--' }}" readonly>
            </div>
            <div class="style">
                <label class="label-principal">Idade</label>
                <input type="text" id="valor_calculado" class="form_conta_capital" value="{{ isset($dadosGerais->data_nascimento_constituicao) ? \Carbon\Carbon::parse($dadosGerais->data_nascimento_constituicao)->age : '--' }} ano(s)" readonly>
            </div>
            <div class="style" style="grid-column: span 4;">
                <label class="label-principal">Profissão</label>
                <input type="text" id="profissao" class="form_cooperado" value="{{ isset($dadosGerais->profissao) ? $dadosGerais->profissao : '--' }}" readonly>
            </div>
        </article>
    </main>

    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/manager.js') }}"></script>
</body>
</html>