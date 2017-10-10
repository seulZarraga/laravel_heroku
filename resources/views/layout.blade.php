<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
	
		.active{

			text-decoration: none;

			color: green;
		}

		.error{

			color: red;

			font-size: 12px;
		}
	</style>
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
		<nav>
			<a class="{{ active_menu('/') }}" href="{{ route('home') }}">Home</a>

			<a class="{{ active_menu('saludos/*') }}" href="{{ route('saludos', 'Seul') }}">Saludos</a>

			<a class="{{ active_menu('mensajes/*') }}" href="{{ route('mensajes.create') }}">Contactos</a>

			@if (auth()->check())
				
				<a class="{{ active_menu('mensajes') }}" href="{{ route('mensajes.index') }}">Mensajes</a>

				<a href="/logout">Cerrar Sesion de {{ auth()->user()->name }}</a>

			@endif

			@if (auth()->guest())

				<a class="{{ active_menu('login') }}" href="/login">Login</a>

			@endif
			
		</nav>
	</header>

	@yield('contenido')
	<footer>Copyright © {{ date('Y') }} </footer>
</body>
</html>