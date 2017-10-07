@extends('layout')

@section('contenido')

<h1>Contactos</h1>

<h2>Escribeme</h2>

<form method="POST" action="contactos">
	<p>
		<label for="nombre">Nombre
			<input type="text" name="nombre" value="{{ old('nombre') }}">
			{!! $errors->first('nombre', '<span class="error">:message</span>') !!}
		</label>
	</p>
	<p>
		<label for="email">E-mail
			<input type="email" name="email" value="">
			{!! $errors->first('email', '<span class="error">:message</span>') !!}
		</label>
	</p>
	<p>
		<label for="mensaje">Mensaje
			<textarea name="mensaje" value=""></textarea>
			{!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
		</label>
	</p>
	<input type="submit" name="enviar" value="enviar">
</form>
<hr>

@stop