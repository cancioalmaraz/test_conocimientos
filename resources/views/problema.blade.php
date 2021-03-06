@extends('layout')

<title>Problema {{ $id }}</title>

@section('content')
	<br>
<h2 align="center">PROBLEMA {{ $id }}</h2>
	<hr>

	<form method="GET" action="{{ route('problems', $id) }}">
		@csrf
		<div class="form-group" style="margin-left: 30px; margin-right: 30px;">
				<label for="textProblem" style="font-size: 25px;"><strong>Ingrese Las Frases</strong></label>
			<textarea name="text" class="form-control" id="textProblem" rows="10">{{ $older }}</textarea>
			<br>
			<div>
				<button type="submit" class="btn btn-primary mb-2">Ejecutar</button>
				<a href="{{ route('problems', $id) }}" class="btn btn-primary mb-2" style="margin-left: 10px;">Limpiar</a>
				@if ($id == 1)
					<button class="btn btn-primary mb-2" onclick="pegarEjemplo1('textProblem')" style="margin-left: 10px;">Pegar Ejemplo</button>
				@else
					<button class="btn btn-primary mb-2" onclick="pegarEjemplo2('textProblem')" style="margin-left: 10px;">Pegar Ejemplo</button>
				@endif
			</div>
		</div>
	</form>

	<div style="margin-left: 30px; margin-right: 30px;">
		<textarea class="form-control" readonly="" rows="10"> {{ $respuesta }}</textarea>
	</div>

	<br>

@endsection