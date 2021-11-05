@extends('layouts.app')

@section('content')
<h1>Lista de libros</h1>
<a class="btn btn-success mb-3" href="{{ route('libros.create') }}">Crear</a>
{{-- @if(count($libros) == 0) --}}
@if($libros->isEmpty())
	<div class="alert alert-warning">
		No existen libros actualmente.
	</div>
@else
	<div class="table-responsive">
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th>Id</th>
					<th>Título</th>
					<th>Prólogo</th>
					<th>Precio</th>
					<th>Stock</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($libros as $libro)
				<tr>
					<td>{{$libro->id}}</td>
					<td>{{$libro->titulo}}</td>
					<td>{{$libro->prologo}}</td>
					<td>{{$libro->precio}}</td>
					<td>{{$libro->stock}}</td>
					<td>{{$libro->estado}}</td>
					<td>
						<a class="btn btn-link" href="{{ route('libros.show', ['libro' => $libro->id]) }}" >Mostrar</a>
						<a class="btn btn-link" href="{{ route('libros.edit', ['libro' => $libro->id]) }}"  >Editar</a>
						<form action="{{ route('libros.destroy', ['libro' => $libro->id]) }}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-link">Elimar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endif
@endsection
