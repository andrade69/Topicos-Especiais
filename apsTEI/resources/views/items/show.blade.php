@extends('layout')

@section('content')
  <h2>Detalhes do Item #{{ $item->id }}</h2>
  <p><strong>Nome:</strong> {{ $item->name }}</p>
  <p><strong>Categoria:</strong> {{ $item->category }}</p>
  <p><strong>Descrição:</strong> {{ $item->description }}</p>
  @if($item->image_path)
    <p><img src="/{{ $item->image_path }}" width="200"></p>
  @endif
  <p><a href="{{ route('items.edit', $item->id) }}">Editar</a> | <a href="{{ route('items.index') }}">Voltar</a></p>
@endsection
