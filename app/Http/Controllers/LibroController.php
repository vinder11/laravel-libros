<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index() {
        $auto = ["color" => "Verde", "Marca" => "Toyota", "Año" => 2005];
        dd($auto);
        $libros = "Esta es una pantalla de libros ";
        return $libros;
    }

    public function create() {
        return "Este es el formulario para crear un libro";
    }

    public function store() {

    }

    public function show($libro) {
        $libros = "Esta es una pantalla para motrar el libro {$libro}";
        return $libros;
    }

    public function edit($libro) {
        return "Formulario para editar el libro {$libro}";
    }

    public function update($libro) {

    }

    public function destroy($idLibro) {

    }
}
