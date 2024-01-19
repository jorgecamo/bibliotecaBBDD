@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Listado de libros</h1>
<table class="table table-striped">
<tr>
    <th>Titulo</th>
    <th>Editorial</th>
    <th>Precio</th>
    <th>Borrar</th>
    <th>Modificar</th>
</tr>
@foreach ($libros as $libro)
<tr>
    <td>{{ $libro["titulo"] }}</td>
    <td>{{ $libro["editorial"] }}</td>
    <td>{{ $libro["precio"] }}</td>
    <td>
        <a class="btn btn-primary" href="{{ route('borrar',$libro )}}">Borrar</a>
    </td>

    <td>
        <a class="btn btn-primary" href="{{ route('borrar',$libro )}}">Modificar</a>
    </td>
</tr>

@endforeach</table>
{{ $libros->links() }}
@endsection