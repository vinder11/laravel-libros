<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->only(['show', 'create']);
        // $this->middleware('auth')->except(['index', 'show']);
    }

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
        if (request()->estado == 'disponible' && request()->stock == 0) {
            session()->flash('error', 'El estado y el stock no coinciden');
            return redirect()->back()->withInput(request()->all());
        }

        $rules = [
            'titulo' => ['required', 'max:255'],
            'prologo' => ['required', 'max:1500'],
            'precio' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'estado' => ['required', 'in:disponible,nodisponible'],
        ];

        request()->validate($rules);

        $libro = Libro::create(request()->all());
        return redirect()->route('libros.index');
    }

    public function show(Libro $libro) {
        return view('libros.show')->with(['libro' => $libro ]);
    }

    public function edit($libro) {
        $libro = Libro::findOrFail($libro);
        // dd($libro);
        return view('libros.edit')->with(['libro' => $libro]);
    }

    public function update($libro) {
        // dd(request());
        if (request()->estado == 'disponible' && request()->stock == 0) {
            session()->flash('error', 'El estado y el stock no coinciden');
            return redirect()->back()->withInput(request()->all());
        }

        $rules = [
            'titulo' => ['required', 'max:255'],
            'prologo' => ['required', 'max:1500'],
            'precio' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'estado' => ['required', 'in:disponible,nodisponible'],
        ];

        request()->validate($rules);

        $libro = Libro::findOrFail($libro);
        $libro->update(request()->all());
        return redirect()->route('libros.index')->withSuccess("Se ha logrado modificar el libro {$libro->titulo}");
    }

    public function destroy($libro) {
        $libro = Libro::findOrFail($libro);
        $libro->delete();
        return redirect()->back();
    }
}
