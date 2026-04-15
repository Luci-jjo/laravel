<form action="{{ route('aluno.adiconar') }}" method="post">
    @csrf
    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome">

    <label for="email"></label>
    <input type="email" name="email" id="email">

    <button type="submit">salvar</button>
    @isset(@sucesso)
    <h1>{{ $sucesso }}</h1>
    @endisset

</form>