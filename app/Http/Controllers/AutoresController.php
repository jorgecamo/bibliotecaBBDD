<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //
    }

    /**
     * Show the form for s.autores_id' in 'where clause' reating a new resource.
     */
    public function create()
    {
        $autores = Autores::get(); //para cargar los autores en el desplegable
        return view('seleccionautor',compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {   
        $ida = $request->get('autor_id');
        $libros = Autores::findOrFail($ida)->libros;
        return view('librosautor',compact('libros'));    
    }

    public function api(String $id)
    {   
        $libros = Autores::findOrFail($id)->libros;
        return $libros;    
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
    //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    //
    }
}
