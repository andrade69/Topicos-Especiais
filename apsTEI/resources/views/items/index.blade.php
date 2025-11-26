@extends('layout')

@section('content')
  <h2>Itens</h2>
  @if($lastCategory)
    <p>Última categoria visitada (cookie): <strong>{{ $lastCategory }}</strong></p>
  @endif
  <table>
    <thead><tr><th>ID</th><th>Nome</th><th>Categoria</th><th>Imagem</th><th>Ações</th></tr></thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->category }}</td>
        <td>
          @if($item->image_path)
            <img src="/{{ $item->image_path }}" alt="img" width="60">
          @endif
        </td>
        <td>
          <a href="{{ route('items.show', $item->id) }}">Ver</a> |
          <a href="{{ route('items.edit', $item->id) }}">Editar</a> |
          <form style="display:inline" method="POST" action="{{ route('items.destroy', $item->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Confirmar?')">Excluir</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $items->links() }}
@endsection
