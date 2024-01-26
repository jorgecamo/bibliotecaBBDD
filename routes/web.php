<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('listado', [LibroController::class, 'index'])->name('listado_libros');

Route::get('insertarlibro', [LibroController::class, 'create'])->name('insertar');

Route::get('mostrarautores', [AutoresController::class, 'create'])->name('mostrarautores');

Route::get('listarlibros', [AutoresController::class, 'show'])->name('mostrarlibrosautor');

Route::get('listado/{id}', [LibroController::class, 'destroy'])->name('borrar');

Route::get('modificar/{id}', [LibroController::class, 'show'])->name('modificar');

Route::put('listadomodificar/{id}', [LibroController::class, 'update'])->name('actualizarmodificar');

Route::post('listadoguardar', [LibroController::class, 'store'])->name('guardar');

    Route::get('cortos', function() {
        $cortos = [
            [
            'id' => 1,
            'titulo' => 'El corto más cortante',
            'director' => 'María Martín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 2,
            'titulo' => 'Sin más',
            'director' => 'Pepa Pérez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 3,
            'titulo' => 'Más o menos',
            'director' => 'Juan Jiménez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 4,
            'titulo' => 'Tira pa\' ya',
            'director' => 'Sofía Sofín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 5,
            'titulo' => 'Miedo','director' => 'Pepe Parrilla',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ]
            ];
        return view('listado_cortos', compact('cortos'));
        })->name('listado_cortos');
    

        Route::get('cortos/{id}', function($id) {
            $cortos = [
                [
                'id' => 1,
                'titulo' => 'El corto más cortante',
                'director' => 'María Martín',
                'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.'
                ],
                [
                'id' => 2,
                'titulo' => 'Sin más',
                'director' => 'Pepa Pérez',
                'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.'
                ],
                [
                'id' => 3,
                'titulo' => 'Más o menos',
                'director' => 'Juan Jiménez',
                'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.'
                ],
                [
                'id' => 4,
                'titulo' => 'Tira pa\' ya',
                'director' => 'Sofía Sofín',
                'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.'
                ],
                [
                'id' => 5,
                'titulo' => 'Miedo','director' => 'Pepe Parrilla',
                'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.'
                ]
                ];
            return view('listado_cortosid', compact('cortos','id'));
            })->name('listado_cortosid');