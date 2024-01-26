@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Bibliografia de : {{  $libros[0]->autor->nombre }}</h1>
<table class="table table-striped">
<tr>
    <th>Titulo</th>
    <th>Editorial</th>
    <th>Precio</th>
</tr>
@foreach ($libros as $libro)
<tr>
    <td>{{ $libro["titulo"] }}</td>
    <td>{{ $libro["editorial"] }}</td>
    <td>{{ $libro["precio"] }}</td>
</tr>
@endforeach
<tr>
    <td colspan="6" style="text-align: center;">
    <a class="btn btn-primary" href="" style="width:100%"  >Descargar</a>
    </td>
</tr>
</table>
<br><br>
<a class="btn btn-primary" href="{{ route('mostrarautores' )}}" >Volver atras</a>
@endsection