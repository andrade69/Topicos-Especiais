@extends('layout')

@section('content')
  <h2>Criar Item</h2>
  <form method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data">
    @csrf
    <label>Nome: <input name="name" value="{{ old('name') }}"></label><br>
    <label>Categoria: <input name="category" value="{{ old('category') }}"></label><br>
    <label>Descrição:<br><textarea name="description">{{ old('description') }}</textarea></label><br>
    <label>Imagem (PNG/JPG): <input type="file" name="image"></label><br>
    <button type="submit">Salvar</button>
  </form>
@endsection
