@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')

<div id="padre">
@forelse ($cortos as $corto)
@if( $corto["id"]  == $id)
    <div class="hijo">
    <h1>{{ $corto["titulo"] }} </h1>
    <h6>{{ $corto["director"] }}</h6>
    <p>{{ $corto["sinapsis"] }}</p>
    <a href="{{route('listado_cortos')}}" class="btn btn-primary">Volver</a>
    </div>
@endif
@empty
<p>No se encontraron libros</p>
@endforelse
</div>
@endsection