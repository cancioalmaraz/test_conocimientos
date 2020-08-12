<style>
	.navbar-collapse{
		text-align: center;
	}
	.navbar-brand{
		font-size: 30px;
	}
</style>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #732077;">
	<a class="navbar-brand align-center">
		<img src="../pc.png" width="45" height="45" class="d-inline-block align-center" alt="">
		Test De Conocimientos
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item {{ setActive('presentation') }}">
				<a class="nav-link" href="/" style="font-size: 25px">Presentacion<span class="sr-only">(current)</span></a>
			</li>

			 <li class="nav-item dropdown {{ setActive('problems') }}">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 25px;">
		          Problemas
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="/problems/1">Problema 1</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="/problems/2">Problema 2</a>
		        </div>
		      </li>

			<li class="nav-item {{ setActive('about') }}">
				<a class="nav-link" href="/about" style="font-size: 25px">Acerca de</a>
			</li>
		</ul>
	</div>
</nav>

