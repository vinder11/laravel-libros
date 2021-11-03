<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function index() {
        $libros = Libro::all();
        // dd($libros);
        return $libros;
    }

    public function create() {
        return "Este es el formulario para crear un libro";
    }

    public function store() {

    }

    public function show($libro) {
        // $libro = DB::table('libros')->where('id', $libro)->get()->first();
        // $libro = DB::table('libros')->find($libro);
        $libro = Libro::findOrFail($libro);
        // dd($libro);
        // select * from libros where id = $libro;
        // return $libro;
        $var = '<strong>54012</strong>';
        $var2 = 'Hola mundo';
        return view('libros.show')->with(['libro' => $libro, 'var' => $var, 'variable' => $var2 ]);
    }

    public function edit($libro) {
        return "Formulario para editar el libro {$libro}";
    }

    public function update($libro) {

    }

    public function destroy($idLibro) {

    }
}
