@extends('plantilla')
@section('contenido')
	<div class="row">
		<div class="col">
			<h1>{{ $project->title }}</h1>
			@auth
				<a href="{{ route('jugadores.edit', $project) }}">editar</a>
				<form method="POST" action="{{ route('jugadores.destroy', $project) }}">
					@csrf @method('DELETE')
					<button>Eliminar</button>
				</form>
			@endauth
			<p>{{ $project->description }}</p>
			<p>{{ $project->created_at->diffForHumans() }}</p>
		</div>
	</div>
@endsection
@section('titulo', 'Jugadores | ' . $project->title)
@section('footer')
    @include('partials.footer')
@endsection
