@extends('layout')

@section('title', 'Acerca de')

@section('content')
	<br>
	<h1 class="text-center">Curriculum</h1>

	<div id="headAbout">
		<img src="/images/perfil.jpg" width="200" height="252" class="rounded float-left" alt="Responsive image">
		<blockquote class="blockquote text-right" style="font-size: 25px;">
			<br>
			David Cancio Almaraz Menacho <br>
			Telefono: 75352544 <br>
			Ciudad: Santa Cruz de la Sierra<br>
			Correo: cancioalmaraz@gmail.com <br>
		</blockquote>
	</div>

	<div id="bodyAbout">
		<br><br><br>

		<h3 class="text-left">Estudios:</h3>
		<hr>
		<h4 class="text-left">UAGRM: Ingenieria Electromecanica (Electrónica)</h4>
		<h4 class="text-right">2015 - 2019</h4>
		<h4 class="text-left">UAGRM: Ingenieria Informatica</h4>
		<h4 class="text-right">2017 - Presente</h4>
		<br>

		<h3>Cualificaciones</h3>
		<hr>
		<ul>
			<li> Electromecanica:
				<ul>
					<li>Conocimientos en instalaciones de electricidad domestica.</li>
					<li>Conocimientos de área eléctrica en general.</li>
					<li>Diseño y ejecucion de proyectos con ELECTRONEUMATICA.</li>
					<li>Programación de Microcontroladores STM, AVR, Arduino, PIC.</li>
					<li>Programación de distintos PLCs (SIEMENS, WEG, SCHNEIDER, KMC Controls).</li>
					<li>Análisis y Diseño de Circuitos electrónicos (Analógicos y Digitales).</li>
					<li>Manejo del programa PROTEUS (Simulación y diseño de circuitos).</li>
					<li>Manejo del programa Kicad (Diseño de placas electrónicas PCB).</li>
					<li>Manejo del programa de Autocad 2D.</li>
				</ul>
			</li>
			<br>
			<li> Informatica:
				<ul>
					<li>Logica de programación desarrollada por años.</li>
					<li>Programación en lenguaje Python, Java, C/C++, Basic, Matlab, PHP, etc</li>
					<li>Manejo de Git.</li>
					<li>Creación de paginas web con Framework DJANGO.</li>
					<li>Creacion de paginas web con Framework Laravel con PHP (aun en desarrollo de aprendizaje).</li>
					<li>Manejo de Base de Datos MySql.</li>
					<li>Html, Css.</li>
					<li>Javascript Basico.</li>
					<li>Bootstrap Basico.</li>
					<li>Manejo de sistemas de gestión de contenidos Wordpress - Joomla.</li>
					<li>Microsoft Office (Word, Excel, Power Point).</li>
				</ul>
			</li>
		</ul><br>

		<h3>Experiencia Laboral</h3>
		<hr>

		<ul>
			<li><strong>Proyectos en General</strong></li>
			<div>
				<br>
				<p class="text-justify">
					<strong><a href="https://www.youtube.com/watch?v=IE-kKDj_SGQ">Intercomunicador inalambrico a través de clave morse</a></strong> : Este proyecto consiste en usar comunicacion inalámbrica a traves de la antena NRF24L01 y la plataforma Arduino, tiene como objetivo principal facilitar la comunicación en centros de salud a personas con discapacidades.
				</p>
				<br>
				<p class="text-justify">
					<strong>Dispensador de refrescos (Coca cola, fanta, etc) a traves de bluetooth</strong> : El proyecto consiste en hacer ordenes a traves de bluetooth a la maquina dispensadora, pasandole de datos, la cantidad de refrescos a servir, el tipo de bebida a pedir y el tamaño del vaso, luego la propia maquina lo hace automaticamente.
				</p>
				<br>
				<p>
					<strong>Control de ingreso o registros a traves RFID</strong> : El proyecto consiste en usar la tecnologia RFID, para controlar el ingreso a personas. cada persona debe tener su propia tarjeta para poder ser identificado.
				</p>
				<br>
				<a>Entre muchos otros proyectos mas.</a>

			</div>
			<br>
			<li><strong>Greennova SRL</strong></li><br>
				<p class="text-justify">Tecnico en area de BMS <br> En este trabajo me encargaba del BMS (Building Management System) que se trataba de:</p>
				<ul>
					<li>Dar mantenimiento.</li>
					<li>Dar soporte.</li>
					<li>Crear la logica de funcionamiento para el sistema.</li>
					<li>Programar y configurar el sistema.</li>
					<li>Revisar tableros eléctricos y sus respectivas conexiones.</li>
				</ul>

			<br>
			<li><strong>Equipo de la UAGRM para la NASA</strong></li>
			<div><br>
				<a><strong>Electrónico para equipo de competencia para la NASA</strong></a>
				<a>NASA HUMAN EXPLORATION ROVER CHALLENGE:</a><br>
				<p class="text-justify"> El fin del proyecto en general fue elaborar un Rover que supere obstaculos que simulen terreno lunar. El trabajo designado hacia mi persona consistia en crear un sistema de telemetria que nos permita obtener todos los datos requeridos remotamente en un centro de control, para posteriormente visualizar, procesar y guardar dicha información. </p><br>
				<strong><a href="https://eldeber.com.bo/tendencias/bolivianos-que-calificaron-para-una-competencia-global-de-la-nasa-buscan-ayuda-paraconcluir-su-proy_164259">Articulo del periodico EL DEBER aqui</a><br></strong>
				<strong><a href="https://eluniversitario.com.bo/universitarios-que-ganaron-un-cupo-para-ir-a-la-nasa-buscan-recaudar-dinero/">Articulo de periodico EL UNIVERSITARIO aqui</a><br></strong>
				<strong><a href="https://www.facebook.com/UAGRM-Rover-Challenge-Bolivia-2020-109746417204667">Pagina de Facebook del Proyecto aqui</a></strong>
			</div>
		</ul><br>

		<h3>Intereses</h3>
		<hr>
		<p class="text-justify">Mi mayor interés es de poder desarrollar mis aptitudes en una organización en condiciones de crecimiento y estabilidad dando todo mi potencial, dinamismo, creatividad y dedicación para poder obtener una buena experiencia en el campo laboral.</p>
		<p></p><br>
		<p>Me considero una persona dinamica, que brinda buen ambiente de trabajo, listo para el trabajo en equipo, y ademas considero que tengo la habilidad de aprender muy rapido, por lo que suelo resolver problemas nuevos rapidamente.</p><br>

	</div>

@endsection