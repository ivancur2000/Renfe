@extends('adminlte::page')

@section('title', 'Rutas')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Rutas</h1>
@stop

@section('content')
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.route.index') }}" class="btn btn-outline-danger">
      Volver <i class="fas fa-arrow-left"></i>
    </a>
  </header>
  <article class="card-body">

    <x-jet-validation-errors class="mb-3 rounded-0" />

    {!! Form::open(['route'=>'admin.route.store', 'autocomplete' => 'off']) !!}
      {!! Form::label('name', 'Nombre de la ruta') !!}
      {!! Form::text('name', null, ['class'=>'form-control '.($errors->has('name') ? ' is-invalid' : ''  )]) !!}
      @error('name')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('code', 'Codigo de la ruta') !!}
      {!! Form::text('code', null, ['class'=>'form-control '.($errors->has('code') ? ' is-invalid' : ''  )]) !!}
      @error('code')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('longer', 'Largo') !!}
      {!! Form::text('longer', null, ['class'=>'form-control '.($errors->has('longer') ? ' is-invalid' : ''  )]) !!}
      @error('longer')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('duration', 'Duracion') !!}
      {!! Form::number('duration', null, ['class'=>'form-control '.($errors->has('duration') ? ' is-invalid' : ''  )]) !!}
      @error('duration')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('description', 'Descripcion') !!}
      {!! Form::text('description', null, ['class'=>'form-control '.($errors->has('description') ? ' is-invalid' : ''  )]) !!}
      @error('description')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('starting_station', 'Punto de partida') !!}
      {!! Form::text('starting_station', null, ['class'=>'form-control '.($errors->has('starting_station') ? ' is-invalid' : ''  )]) !!}
      @error('starting_station')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('ending_station', 'Destino') !!}
      {!! Form::text('ending_station', null, ['class'=>'form-control '.($errors->has('ending_station') ? ' is-invalid' : ''  )]) !!}
      @error('ending_station')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

    {!! Form::label('preferences[]', 'Lista de preferencias') !!}
    @foreach($preferences as $preference)
      <div>
        <label class="text-muted">
          {!! Form::checkbox('preferences[]', $preference->id, null, ['class' => 'mr-1']) !!}
          {{ $preference->name }}
        </label>
      </div>
    @endforeach
    @error('preferences[]')
      <strong class="text-danger d-block">
        {{ $message }}
      </strong>
    @enderror

    {!! Form::label('stations[]', 'Lista de estaciones') !!}
    @foreach($stations as $station)
      <div>
        <label class="text-muted">
          {!! Form::checkbox('stations[]', $station->id, null, ['class' => 'mr-1']) !!}
          {{ $station->name }}
        </label>
      </div>
    @endforeach
    @error('stations[]')
      <strong class="text-danger">
        {{ $message }}
      </strong>
    @enderror
      <div class="mb-0 mt-2">
          <div class="d-flex justify-content-end align-items-baseline">
              <x-jet-button>
                  Registrar
              </x-jet-button>
          </div>
      </div>
    {!! Form::close() !!}


  </article>
</section>
@stop

@section('js')
  <script> </script>
@stop
