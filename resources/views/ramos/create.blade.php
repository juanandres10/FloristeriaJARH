@extends('plantilla')
@section('contenido')
  <div class="home ml-2">
    <div class="row">
        <div class="col-12">
          <h1 class="text-degradado_red_blue">Crear ramo</h1>
        </div>
    </div>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('ramos.store') }}">
	      @include('ramos._form')
	      <button type="submit" class="btn btn-primary mb-2">Enviar</button>
  	</form>
  </div>
@endsection
@section('titulo', 'Crear ramos')

@section('footer')
    @include('partials.footer')
@endsection


