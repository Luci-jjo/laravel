<div>
    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <br>

        <label for="periodo">Período</label>
        <input type="text" name="periodo" id="periodo">

        <button type="submit">Salvar</button>
    </form>

    
</div>
