@extends('layout')

@section('contenido')
<a href="{{ route('mascotas.create') }}">Crear Mascota</a>

<table class="table table-responsive table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Especie</th>
      <th>Edad</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($mascotas as $mascota)
    <tr>
      <td>{{ $mascota->id}}</td>
      <td>{{ $mascota->nombre }}</td>
      <td>{{ $mascota->especie }}</td>
      <td>{{ $mascota->edad }}</td>
      <td>
        <a href="{{ route('mascotas.show', $mascota) }}">Ver</a>
        <a href="{{ route('mascotas.edit', $mascota) }}">Editar</a>
        <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
  @endsection