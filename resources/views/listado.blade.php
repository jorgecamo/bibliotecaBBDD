@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Listado de libros</h1>
<ul class="list-group">
@forelse ($libros as $libro)
<li  class="list-group-item list-group-item-info">{{ $libro["titulo"] }} ({{ $libro["autor"] }})</li>
@empty
<li>No se encontraron libros</li>
@endforelse </ul>
@endsection