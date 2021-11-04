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
        return view('libros.index')->with([ 'libros' => $libros]);
    }

    public function create() {
        return view('libros.create');
    }

    public function store() {
        // dd(request());
        $libro = Libro::create(request()->all());
        return $libro;
    }

    public function show($libro) {
        $libro = Libro::findOrFail($libro);
        // dd($libro);
        return view('libros.show')->with(['libro' => $libro ]);
    }

    public function edit($libro) {
        $libro = Libro::findOrFail($libro);
        // dd($libro);
        return view('libros.edit')->with(['libro' => $libro]);
    }

    public function update($libro) {
        // dd(request());
        $libro = Libro::findOrFail($libro);
        $libro->update(request()->all());
        return $libro;
    }

    public function destroy($idLibro) {

    }
}
