@extends('layout')

@section('title', 'Test - Presentacion')

@section('content')
	<br>
	<h1 class="text-center">PRESENTACION</h1>
	<hr>
	<div id="bodyPresentation">
		<h3>El objetivo del presente test es medir las habilidades del postulante a Desarrollador Web:</h3>
		<br>
		<ul>
			<li>Capacidad de Análisis de problemas, propuesta de solución e implementación.</li>
			<li>Uso de estándares y best practices.</li>
			<li>Conocimientos de Diseño de UI/UX y diseño responsivo</li>
			<li>Manejo de Javascript, Ajax y librerías Front End</li>
			<li>Estructura de datos y Programación Orientada a Objetos en Backend</li>
		</ul><br>
		<hr>
		<h3>Problema 1</h3>
		<p class="text-justify">Dada una estrofa que consta de varias frases separadas por salto de línea, y cada frase separada por espacios. Se deben ordenar las frases de la estrofa de mayor a menor en base a la longitud de caracteres de la frase. Así mismo, cada frase conformada de palabras separadas por espacios, se debe devolver cada frase formada por las mismas palabras en orden inverso.</p>

		<ul>
			<li>Entrada</li>
				<p>Yendo un weekend a lo de Damian,<br>Tenia urgencia de hablar con el man,<br>Camine porque pinche mi van,<br>Vi una mina de la que soy fan<br><br>Una que sale por el canal Sony<br>En una serie que esta con un pony<br>Y en mi casa del barrio Marconi<br>Siempre la veo tomandome un Johnny</p>
			<li>Salida</li>
				<p>man, el con hablar de urgencia Tenia<br>Damian, de lo a weekend un Yendo<br>fan soy que la de mina una Vi<br>van, mi pinche porque Camine<br><br>Johnny un tomandome veo la Siempre<br>pony un con esta que serie una En<br>Marconi barrio del casa mi en Y<br>Sony canal el por sale que Una</p>
		</ul>
		<hr>
		<h3>Problema 2</h3>
		<p class="text-justify">El texto anterior es un pareado: una estrofa con dos versos que riman entre sí con rima consonante. ¿Sabrías hacer un programa que identifique distintos tipos de estrofa? En concreto, nos bastará con identificar las rimas (no tendremos en cuenta el número de sílabas de cada verso)</p>

		<ul>
			<li>Entrada</li>
				<p>Historial ayer borrado<br>anteayer hubo pecado<br><br>Esto no pega<br>ni con cola.<br><br>Era un simple clerigo, pobre de clerecia,<br>dicie cutiano missa de la sancta Maria;<br>non sabie decir otra, diciela cada dia,<br>mas la sabie por uso qe por sabiduria.<br><br>Un manotazo duro, un golpe helado,<br>un hachazo invisible y homicida,<br>un empujon brutal te ha derribado.</p>
			<li>Salida</li>
				<p>PAREADO<br>DESCONOCIDO<br>CUADERNA VIA<br>TERCETO</p>
		</ul>

	</div>
@endsection