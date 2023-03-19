@extends('dashboard.master')
@section('titulo', 'Mensaje')
@section('contenido')
  <h1>Mensaje: </h1>
  <div class="container">
    <h2>{{ $msg }}</h2>
    <a href="{{ url('dashboard/post') }}" class="btn btn-secondary btn-sm">Regresar</a>
  </div>
@endsection