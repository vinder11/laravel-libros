@extends('layouts.principal')

@section('content')
	<h1>Creación de Libro</h1>
	<form action="{{ route('libros.store') }}" method="post">
		@csrf
		<div class="form-row">
			<label for="titutlo">Título</label>
			<input class="form-control" type="text" name="titulo" id="titulo">
		</div>

		<div class="form-row">
			<label for="prologo">Prólogo</label>
			<input class="form-control" type="text" name="prologo" id="prologo">
		</div>

		<div class="form-row">
			<label for="precio">Precio</label>
			<input class="form-control" type="text" name="precio" id="precio" min="1.00" step="0.01">
		</div>

		<div class="form-row">
			<label for="stock">Stock</label>
			<input class="form-control" type="text" name="stock" id="stock" min="0">
		</div>

		<div class="form-row">
			<label for="estado">Estado</label>
			<select class="custom-select" name="estado" id="estado">
				<option value="" selected>Seleccionar...</option>
				<option value="disponible">Disponible</option>
				<option value="nodisponible">No disponible</option>
			</select>
		</div>

		<div class="form-row mt-3">
			<button type="submit" class="btn btn-primary btn-lg">Crear libro</button>
		</div>
	</form>
@endsection