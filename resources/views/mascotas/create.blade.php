@extends('layout')

@section('contenido')
<h2>Crear Mascota</h2>
<form action="{{ route('mascotas.store') }}" method="POST">
  @csrf
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="nombre">
  <label for="especie">Especie</label>
  <input type="text" name="especie" id="especie">
  <label for="edad">Edad</label>
  <input type="number" name="edad" id="edad" min="1" max="255">

  <button type="submit">💾 Guardar</button>
</form>
@endsection