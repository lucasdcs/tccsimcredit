@include('shared.Head')
</head>

<body>
    @include('shared.Navbar')
    @include('shared.Sidebar')

    <main id="article_show" style="padding-top: 66px">
        <form method="POST" action="{{ route('operacoes.store') }}">
            @csrf
            <section class="section_cabecalho">
                <article id='article_cpfcnpj'>
                    <label class="label-principal" id="label_cpfcnpj">CPF/CNPJ</label>
                    <input type="text" id="pessoa_cpf_cnpj" name="pessoa_cpf_cnpj" class="input_cabecalho">
                </article>
                <article id="article_nome">
                    <label class="label-principal" id="label_cpfcnpj">Número da Operacao</label>
                    <input type="text" id="nome" name="numero" class="input_cabecalho">
                </article>
                <article>
                    <button id="article_button" type="submit">Criar Operação</button>
                </article>
            </section>
        </form>
    </main>

    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
