@extends('layout')

@section('contenido')

	<h1>Todos los mensaje!</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Mensaje</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($messages as $message)
				<tr>
					<td> {{ $message->nombre }} </td>
					<td> {{ $message->email }} </td>
					<td> {{ $message->mensaje }} </td>
					<td>
						<a class="btn btn-info btn-group-xs" href="{{ route('mensajes.show', $message->id) }}">Ver Detalle</a> <a class="btn btn-warning btn-group-xs" href="{{ route('mensajes.edit', $message->id) }}">Editar</a>
						<form style="display: inline;" method="POST" action="{{ route('mensajes.destroy', $message->id) }}">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button class="btn btn-danger btn-group-xs" type="submit">Borrar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop