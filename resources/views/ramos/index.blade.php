@extends('plantilla')
@section('contenido')
  <div class="home">
    <div class="row">
        <div class="col-12">
          <h1 class="text-degradado_red_blue">Ramos</h1>
        </div>
    </div>
        @auth
          @if (Auth()->user()->rol=='admin')
            <div class="row mr-1 d-flex justify-content-end">
              <!-- <div class="col bg-dark">
                <a href="{{ route('ramos.create') }}">Crear jugadores</a>
              </div> -->
              <a href="{{ route('ramos.create') }}" class="btn bg-cristina text-white btn-lg active" role="button" aria-pressed="true" title="Pulse el botón para crear un nuevo ramo">Crear ramos</a>
            </div>
          @endif
        @endauth
    <div class="lista ml-1 mr-1">
      <ul class="list-group">
          @forelse ($equipo as $item)
            <li class="list-group-item list-group-item-success"><a class="text-decoration-none text-degradado_red_blue" href="{{ route('ramos.show', $item) }}">{{ $item['title'] }}</a></li>
        @empty
          <li class="list-group-item">No hay proyectos para mostrar</li>
          @endforelse
      </ul>
    </div>
  </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('titulo', 'Ramos')