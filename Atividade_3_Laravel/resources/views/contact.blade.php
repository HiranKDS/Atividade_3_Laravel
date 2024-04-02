<h1>Listagem de contatos</h1>


@foreach ($contacts as $contact)

<div>{{$contact->name}}</div>

@endforeach

<form action="/contato/store" method="POST">
    @method('POST')
    @csrf
    <button type="submit"> Cadastrar contato</button>

</form>


<form action="/contato/update" method="POST">
    @method('PUT')
    @csrf
    <button type="submit"> Alterar contato</button>

</form>

<form action="/contato/delete/1" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit"> Excluir contato</button>

</form>