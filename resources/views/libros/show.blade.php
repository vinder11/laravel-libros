
@extends('layouts.principal')
@section('content')
<h1>{{ $libro->titulo }}</h1>
<p>{{ $libro->prologo }}</p>
<p><strong>Precio</strong> {{ $libro->precio }}</p>
<p><strong>Stock</strong> {{ $libro->stock }}</p>
<p><strong>Estado</strong> {{ $libro->estado }}</p>
@endsection
		