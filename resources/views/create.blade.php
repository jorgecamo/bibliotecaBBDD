@extends('plantilla')
@section('titulo', 'Insertar libro')
@section('contenido')
<h1>Nuevo libro</h1>
<form action="{{ route('guardar') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" id="titulo">
        </div>
        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" name="editorial" id="editorial">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" class="form-control" name="precio" id="precio">
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <select class="form-control" name="autor_id" id="autor">
                @foreach ($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <br><br><br>
        <div  width="60%">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary " >
            <a class="btn btn-primary" href="{{ route('listado_libros' )}}" >Volver atras</a>
        </div>


    </div>
</form>
@endsection