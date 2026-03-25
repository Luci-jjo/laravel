<table class="tabela-produtos">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th class="texto-centralizado">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto['id'] }}</td>
            <td>{{ $produto['nome'] }}</td>
            <td class="preco">R$ {{ number_format($produto['preco'], 2, ',', '.') }}</td>
            <td class="acoes">
                <button class="btn btn-editar">Editar</button>
                <button class="btn btn-remover">Remover</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    /* Estilo da Tabela */
    .tabela-produtos {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 20px 0;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden; /* Para o arredondamento funcionar */
    }

    .tabela-produtos thead {
        background-color: #2d3748;
        color: white;
        text-align: left;
    }

    .tabela-produtos th, 
    .tabela-produtos td {
        padding: 12px 15px;
        border-bottom: 1px solid #e2e8f0;
    }

    /* Efeito de linhas alternadas */
    .tabela-produtos tbody tr:nth-child(even) {
        background-color: #f8fafc;
    }

    .tabela-produtos tbody tr:hover {
        background-color: #edf2f7;
    }

    /* Preço em negrito */
    .preco {
        font-weight: bold;
        color: #2c7a7b;
    }

    /* Botões */
    .acoes {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .btn {
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-editar {
        background-color: #4299e1;
        color: white;
    }

    .btn-editar:hover { background-color: #3182ce; }

    .btn-remover {
        background-color: #f56565;
        color: white;
    }

    .btn-remover:hover { background-color: #e53e3e; }
    
    .texto-centralizado { text-align: center; }
</style>