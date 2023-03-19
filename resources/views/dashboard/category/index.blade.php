@extends('dashboard.master')
@section('titulo', 'Posts')
@section('contenido')
  <main>
    <div class="container py-4">
      <h2>Categorías publicadas</h2>
      <a href="{{ url('dashboard/category/create') }}" class="btn btn-primary btn-sm">Nueva Categoría</a>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha de creación</th>
            <th>Fecha de modificación</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
              <td>{{ $category->created_at }}</td>
              <td>{{ $category->updated_at }}</td>
              <td><a href="{{ url('dashboard/category/'.$category->id.'/edit') }}" class="bi bi-pencil"></a></td>
              <td>
                <form action="{{ url('dashboard/category/'.$category->id) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <button class="bi bi-eraser-fill" type="submit"></button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection
