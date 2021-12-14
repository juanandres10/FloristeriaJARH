@extends('plantilla')
@section('contenido')

	<div class="container">
	    <div class="row">
	        <div class="col-sm-6">
	            <img class="img-fluid" src="{{ $project->imagen }}">
	        </div>
	        <div class="col-sm-6">
	            <h1 class="text text-degradado_red_blue mb-3 mt-3">{{ $project->title }}</h1>
	            <h2 class="text text-center text-posiciones2 mb-3">Precio: {{ $project->precio }} €</h2>
	            <p class="text-center mb-3">Descripcion: {{ $project->description }}</p>
	            <p class="text-center mb-3">Añadido hace {{ $project->created_at->diffForHumans(null, true) }}</p>
	            @auth
		            @if (Auth()->user()->rol=='admin')
		            <div class="btn-group d-flex justify-content-center">
		            	<div class="col-6">
		            		<a class="btn btn-verde" href="{{ route('ramos.edit', $project) }}">Actualizar</a>
		            	</div>
						
						<form method="POST" action="{{ route('ramos.destroy', $project) }}">
							@csrf @method('DELETE')
							<button class="btn btn-danger text-white">Eliminar</button>
						</form>
					</div>
					@endif
				@endauth
	        </div>
	    </div>
	</div>

@endsection
@section('titulo', 'ramos | ' . $project->title)
@section('footer')
    @include('partials.footer')
@endsection
