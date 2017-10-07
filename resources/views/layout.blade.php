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
			<a class="{{ active_menu('contactame') }}" href="{{ route('contactos') }}">Contactos</a>
		</nav>
	</header>

	@yield('contenido')
	<footer>Copyright © {{ date('Y') }} </footer>
</body>
</html>