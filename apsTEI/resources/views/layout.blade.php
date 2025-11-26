<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Trabalho Final - Laravel</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
  <header>
    <h1>Trabalho Final - Tópicos Especiais I</h1>
    <nav>
      <a href="{{ route('items.index') }}">Lista</a> |
      <a href="{{ route('items.create') }}">Criar</a>
    </nav>
    <hr>
  </header>
  <main>
    @if(session('success'))
      <div role="status" style="padding:10px;border:1px solid green;background:#eaffea">{{ session('success') }}</div>
    @endif
    @if($errors->any())
      <div style="padding:10px;border:1px solid red;background:#ffecec">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @yield('content')
  </main>
  <footer><hr><small>Exemplo de sistema com sessões e cookies.</small></footer>
</body>
</html>
