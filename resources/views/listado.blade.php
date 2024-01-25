@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Listado de libros</h1>
<table class="table table-striped">
<tr>
    <th>Titulo</th>
    <th>Editorial</th>
    <th>Precio</th>
    <th>Autor</th>
    <th>Borrar</th>
    <th>Modificar</th>
</tr>
@foreach ($libros as $libro)
<tr>
    <td>{{ $libro["titulo"] }}</td>
    <td>{{ $libro["editorial"] }}</td>
    <td>{{ $libro["precio"] }}</td>
    <td>{{  $libro->autor->nombre }}</td>
    <td>
        <a class="btn btn-primary" href="{{ route('borrar',$libro )}}">Borrar</a>
    </td>

    <td>
        <a class="btn btn-primary" href="{{ route('modificar',$libro )}}">Modificar</a>
    </td>
</tr>

@endforeach
<tr>
    <td colspan="6" style="text-align: center;">
    <a class="btn btn-primary" href="{{ route('insertar' )}}" style="width:100%"  >Insertar</a>
    </td>
</tr>
</table>
{{ $libros->links() }}
@endsection