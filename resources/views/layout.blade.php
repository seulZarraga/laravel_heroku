<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Home</title>
</head>
<body>
	<h1></h1>
	<header>
		<?php

			function active_menu($url){

				return request()->is($url) ? 'active' : '';
			}

		?>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Title</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="{{ active_menu('/') }}"><a href="{{ route('home') }}">Home</a></li>

						<li class="{{ active_menu('saludos/*') }}"><a href="{{ route('saludos', 'Seul') }}">Saludos</a></li>

						<li class="{{ active_menu('mensajes/create') }}"><a href="{{ route('mensajes.create') }}">Contactos</a></li>

						@if (auth()->check())
							
							<li class="{{ active_menu('mensajes/*') }}"><a href="{{ route('mensajes.index') }}">Mensajes</a></li>

						@endif

					</ul>

					<ul class="nav navbar-nav navbar-right">

						@if (auth()->guest())

							<li class="{{ active_menu('login') }}"><a href="/login">Login</a></li>
						@else
							<li><a href="/logout">Cerrar Sesion de {{ auth()->user()->name }}</a></li>

						@endif
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<div class="container">
	@yield('contenido')
	<footer>Copyright © {{ date('Y') }} </footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/all.js"></script>
</body>
</html>