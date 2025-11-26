@extends('layout')

@section('content')
  <h2>Editar Item #{{ $item->id }}</h2>
  <form method="POST" action="{{ route('items.update', $item->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Nome: <input name="name" value="{{ old('name', $item->name) }}"></label><br>
    <label>Categoria: <input name="category" value="{{ old('category', $item->category) }}"></label><br>
    <label>Descrição:<br><textarea name="description">{{ old('description', $item->description) }}</textarea></label><br>
    <label>Imagem (PNG/JPG): <input type="file" name="image"></label><br>
    @if($item->image_path)
      <p>Imagem atual:<br><img src="/{{ $item->image_path }}" width="120"></p>
    @endif
    <button type="submit">Atualizar</button>
  </form>
@endsection
