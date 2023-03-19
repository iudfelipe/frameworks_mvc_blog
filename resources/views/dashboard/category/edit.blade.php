@extends('dashboard.master')
@section('titulo', 'Editar categoría')
@section('contenido')
@include('dashboard.partials.validation-error')
  <h1>Editar categoría</h1>
  <form action="{{ url('dashboard/category/'.$category->id) }}" method="POST">
    @method('PUT')
    @csrf
    <main>
      <div class="row form-group">
        <label for="name">Categoría</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
      </div>
      <div class="row form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $category->description }}</textarea>
      </div>
      <div class="row center">
        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
        <a href="{{ url('dashboard/category') }}" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </main>
  </form>
@endsection