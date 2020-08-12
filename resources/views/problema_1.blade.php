@extends('layout')

@section('title', 'Problema 1')

@section('content')
	<br>
	<h2 align="center">PROBLEMA 1</h2>

	@include('partials/textArea')

	<h2 style="margin-left: 30px;">{{ $respuesta }}</h2>
@endsection