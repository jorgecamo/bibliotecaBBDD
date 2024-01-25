<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Autores;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::paginate(5);
        return view('listado', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores = Autores::get(); //para cargar los autores en el desplegable
        return view('create',compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $libro = new Libro();
    $libro->titulo = $request->get('titulo');
    $libro->editorial = $request->get('editorial');
    $libro->precio = $request->get('precio');
    $libro->autor_id = $request->get('autor_id');
    $libro->save();
    return redirect()->route('listado_libros'); //Redireccionar al listado.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        $autores = Autores::get();
        $libroAModificar = Libro::findOrFail($id);
        $nombreAutor = Libro::findOrFail($id)->autor->nombre;
        return view('modify',compact('libroAModificar','autores','nombreAutor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Libro::findOrFail($id)->update($request->all());
        return redirect()->route('listado_libros'); //Redireccionar al listado.

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Libro::findOrFail($id)->delete();
        $libros = Libro::paginate(5);
        return view('listado', compact('libros'));
    }
}
