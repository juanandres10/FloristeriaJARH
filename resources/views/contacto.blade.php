@extends('plantilla')
@section('contenido')

    @if(session('prueba'))
      {{session('prueba')}}
    @else
<div class="home ml-2">
    <div class="row">
        <div class="col-12">
          <h1 class="text-degradado_red_blue">Formulario de contacto</h1>
        </div>
    </div>
      <form method="POST" action="{{ route('contacto') }}">
        @csrf
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" name="nombre" placeholder="Escriba su nombre" value="{{old('nombre')}}">
          {!! $errors->first('nombre','<small>:message</small><br>') !!}
        </div>
        <div class="form-group">
          <label>Correo electronico</label>
          <input class="form-control" type="email" name="correo"placeholder="Escriba su direccion de email" value="{{ old('correo') }}">
          {!! $errors->first('correo','<small>:message</small><br>') !!}
        </div>
        <div class="form-group">
          <label>Asunto</label>
          <input name="asunto" class="form-control" placeholder="Escriba su asunto" value="{{ old('asunto') }}">
          {!! $errors->first('asunto','<small>:message</small><br>') !!}
        </div>
        <br>
        <div class="form-group">
          <label>Mensaje</label>
          <textarea class="form-control" name="contenido" placeholder="Escribe aqui un mensaje">{{ old('contenido') }}</textarea>
          {!! $errors->first('contenido','<small>:message</small><br>') !!}
        </div>
        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
      </form>

    @endif

  </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('titulo', 'Contacto')