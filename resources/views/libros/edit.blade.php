@extends('layouts.app')

@section('content')
	<h1>Creación de Libro</h1>
	<form action="{{ route('libros.update',['libro' => $libro->id]) }}" method="post">
		@csrf
		@method('PUT')
		<div class="form-row">
			<label for="titutlo">Título</label>
			<input class="form-control" type="text" name="titulo" id="titulo" value="{{old('titulo') ?? $libro->titulo}}">
		</div>

		<div class="form-row">
			<label for="prologo">Prólogo</label>
			<input class="form-control" type="text" name="prologo" id="prologo" value="{{old('prologo') ?? $libro->prologo}}">
		</div>

		<div class="form-row">
			<label for="precio">Precio</label>
			<input class="form-control" type="text" name="precio" id="precio" min="1.00" step="0.01" value="{{old('precio') ?? $libro->precio}}">
		</div>

		<div class="form-row">
			<label for="stock">Stock</label>
			<input class="form-control" type="text" name="stock" id="stock" min="0" value="{{old('stock') ?? $libro->stock}}">
		</div>

		<div class="form-row">
			<label for="estado">Estado</label>
			<select class="custom-select" name="estado" id="estado">
				<option value="" selected>Seleccionar...</option>
				<option value="disponible" {{ (old('estado') == 'disponible') ? 'selected' : ($libro->estado) == 'disponible' ? 'selected': '' }} >Disponible</option>
				<option value="nodisponible" {{ (old('estado') == 'nodisponible') ? 'selected' : ($libro->estado) == 'nodisponible' ? 'selected': '' }}>No disponible</option>
			</select>
		</div>

		<div class="form-row mt-3">
			<button type="submit" class="btn btn-primary btn-lg">Editar libro</button>
		</div>
	</form>
@endsection