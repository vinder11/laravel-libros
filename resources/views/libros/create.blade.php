@extends('layouts.app')

@section('content')

	<h1>Creación de Libro</h1>
	<form action="{{ route('libros.store') }}" method="post">
		@csrf
		<div class="form-row">
			<label for="titulo">Título</label>
			<input class="form-control" type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
		</div>

		<div class="form-row">
			<label for="prologo">Prólogo</label>
			<input class="form-control" type="text" name="prologo" id="prologo" value="{{ old('prologo') }}">
		</div>

		<div class="form-row">
			<label for="precio">Precio</label>
			<input class="form-control" type="text" name="precio" id="precio" min="1.00" step="0.01" value="{{ old('precio') }}">
		</div>

		<div class="form-row">
			<label for="stock">Stock</label>
			<input class="form-control" type="text" name="stock" id="stock" min="0" value="{{ old('stock') }}">
		</div>

		<div class="form-row">
			<label for="estado">Estado</label>
			<select class="custom-select" name="estado" id="estado">
				<option value="" selected>Seleccionar...</option>
				<option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
				<option value="nodisponible" {{ old('estado') == 'nodisponible' ? 'selected' : '' }}>No disponible</option>
			</select>
		</div>

		<div class="form-row mt-3">
			<button type="submit" class="btn btn-primary btn-lg">Crear libro</button>
		</div>
	</form>
@endsection