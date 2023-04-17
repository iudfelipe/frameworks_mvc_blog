<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{--  link:ref --}}
  <link rel="stylesheet" href="{{  asset('css/app.css') }}">
  {{--  script:src --}}
  <script src="{{ asset('js/app.js') }}"></script>
  <title>@yield('titulo')</title>
</head>
<body>
  {{-- .container section --}}
  <div class="container section">
    @if (session('status'))
    <div class="alert alert-primary">
      {{ session('status') }}
    </div>
    @endif
    @yield('contenido')
  </div>
</body>
</html>