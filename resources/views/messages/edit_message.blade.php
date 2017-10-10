@extends('layout')

@section('contenido')

	<h1>Editar Mensaje</h1>

	<form method="POST" action="{{ route('messages.update', $message->id) }}">
	{{ method_field('PUT') }}
	{{ csrf_field() }}
	<p>
		<label for="nombre">Nombre
			<input type="text" name="nombre" value="{{ $message->nombre }}">
			{!! $errors->first('nombre', '<span class="error">:message</span>') !!}
		</label>
	</p>
	<p>
		<label for="email">E-mail
			<input type="email" name="email" value=" {{ $message->email }} ">
			{!! $errors->first('email', '<span class="error">:message</span>') !!}
		</label>
	</p>
	<p>
		<label for="mensaje">Mensaje
			<textarea name="mensaje" value=" {{ $message->mensaje }} ">{{ $message->mensaje }}</textarea>
			{!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
		</label>
	</p>
	<input type="submit" name="enviar" value="enviar">
</form>
@stop