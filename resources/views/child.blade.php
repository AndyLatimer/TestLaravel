@extends('layouts.app')

@section('title', 'Titulo de la pagina')

@section('sidebar')
	@parent
	<p>Appended to master sidebar</p>
@endsection

@section('content')
<p>Este es el contenido</p>
<p>Aqui va el parametro resultado: {{ $parametro }}</p>
@endsection
