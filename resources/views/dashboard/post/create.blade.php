@extends('dashboard.master')
@section('titulo', 'Agregar Post')
@section('contenido')
@include('dashboard.partials.validation-error')
  <h1>Registrar post</h1>
  <form action="{{ route('post.store') }}" method="POST">
    @csrf
    <main>
      <div class="row form-group">
        <label for="name">Artículo</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="row form-group">
        <label for="description">Contenido</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
      </div>
      <div class="row form-group">
        <label for="category">Categoría</label>
        <select name="category" id="category">
          <option>Seleccionar una categoria</option>
          @foreach ($category as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="row center">
        <button class="btn btn-success btn-sm" type="submit">Publicar</button>
        <a href="{{ url('dashboard/post') }}" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </main>
  </form>
@endsection