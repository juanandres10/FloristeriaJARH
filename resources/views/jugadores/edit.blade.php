@extends('plantilla')
@section('contenido')
  <div class="home">
    <div class="row">
        <div class="col bg-danger text-primary">
            <h1>Editarjugador<h1>
        </div>
    </div>

   @include('partials.validation-errors')

    <form method="POST" action="{{ route('jugadores.update', $project) }}">
	      @method('PATCH')
	      @include('jugadores._form')
	      <button type="submit" class="btn btn-primary">Actualizar</button>
  	</form>
  </div>
@endsection
@section('titulo', 'Crear jugador')

@section('footer')
    @include('partials.footer')
@endsection


