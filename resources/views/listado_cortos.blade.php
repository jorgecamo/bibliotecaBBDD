@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')

<div id="padre">
@forelse ($cortos as $corto)
<div class="hijo">
<h1>{{ $corto["titulo"] }} </h1>
<h6>{{ $corto["director"] }}</h6>
<p>{{ $corto["sinapsis"] }}</p>
<a href="{{route('listado_cortosid',$corto['id'])}}" class="btn btn-primary">Detalles</a>
</div>
@empty
<p>No se encontraron libros</p>
@endforelse
</div>
@endsection