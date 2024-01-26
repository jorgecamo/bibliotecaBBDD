@extends('plantilla')
@section('titulo', 'Sacar libros asociados a un autor')
@section('contenido')
<h1>Selecciona Un Autor</h1>
<form action="{{ route('mostrarlibrosautor') }}" method="GET">
    @csrf
    <div class="row mb-3">
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
        </div>
    </div>
</form>
@endsection