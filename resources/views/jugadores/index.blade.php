@extends('plantilla')
@section('contenido')
  <div class="home">
    <div class="row">
        <div class="col bg-danger text-primary">
            <h1>Estos son los jugadores<h1>
        </div>
        @auth
          <div class="row">
            <div class="col bg-dark">
              <a href="{{ route('jugadores.create') }}">Crear jugadores</a>
            </div>
          </div>
        @endauth
    </div>
    <div class="lista">
      <ul class="list-group">
          @forelse ($equipo as $item)
            <li class="list-group-item"><a href="{{ route('jugadores.show', $item) }}">{{ $item['title'] }}</a></li>
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

@section('titulo', 'Jugadores')