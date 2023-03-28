@extends('dashboard.master')
@section('titulo', 'Agregar Categoria')
@section('contenido')
@include('dashboard.partials.validation-error')

  <h1>Registrar categoria</h1>
  <form action="{{ route('category.store') }}" method="POST">
    @csrf
    <main>
      <div class="row form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="row form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
      </div>
      <div class="row center">
        <button class="btn btn-success btn-sm" type="submit">Crear</button>
        <a href="{{ url('dashboard/category') }}" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </main>
  </form>
@endsection