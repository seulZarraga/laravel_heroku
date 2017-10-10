@extends('layout')

@section('contenido')

	<h1>Todos los mensaje!</h1>

	<table width="100%" border="1">
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
						<a href="{{ route('messages.show', $message->id) }}">Ver Detalle</a>/<a href="{{ route('messages.edit', $message->id) }}">Editar</a>
						<form style="display: inline;" method="POST" action="{{ route('messages.destroy', $message->id) }}">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button type="submit">Borrar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop