<nav>

	<nav class="navbar navbar-expand-lg navbar navbar-dark flex-md-row bd-navbar" style="background-color: #732077;">
		<a class="navbar-brand">Test De Conocimientos</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item {{ setActive('home') }}">
					<a class="nav-link" href="/">Problemas <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item {{ setActive('about') }}">
					<a class="nav-link" href="/about">Acerca de</a>
				</li>
			</ul>
		</div>
	</nav>

</nav>

