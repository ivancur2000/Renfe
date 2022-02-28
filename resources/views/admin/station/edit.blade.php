@extends('adminlte::page')

@section('title', 'Estaciones')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Estaciones</h1>
@stop

@section('content')
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.station.index') }}" class="btn btn-outline-danger">
      Volver <i class="fas fa-arrow-left"></i>
    </a>
  </header>

  <article class="card-body">

    <x-jet-validation-errors class="mb-3 rounded-0" />
    
    {!! Form::model($station, ['route'=>['admin.station.update', $station], 'method' => 'put']) !!}
      {!! Form::label('name', 'Nombre de la estacion') !!}
      {!! Form::text('name', null, ['class'=>'form-control '.($errors->has('name') ? ' is-invalid' : ''  )]) !!}
      @error('name')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('code', 'Codigo de la estacion') !!}
      {!! Form::text('code', null, ['class'=>'form-control '.($errors->has('code') ? ' is-invalid' : ''  )]) !!}
      @error('code')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('address', 'Direccion') !!}
      {!! Form::text('address', null, ['class'=>'form-control '.($errors->has('address') ? ' is-invalid' : ''  )]) !!}
      @error('address')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror
      
      {!! Form::label('price', 'Precio') !!}
      {!! Form::number('price', null, ['class'=>'form-control '.($errors->has('price') ? ' is-invalid' : ''  )]) !!}
      @error('price')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('schedule', 'Horarios') !!}
      {!! Form::text('schedule', null, ['class'=>'form-control '.($errors->has('schedule') ? ' is-invalid' : ''  )]) !!}
      @error('schedule')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('line_id', 'Linea') !!}
      {!! Form::select('line_id', $lines, null, ['class'=>'form-control '.($errors->has('line_id') ? ' is-invalid' : '' ) ]) !!}
      @error('line_id')
        <strong class="text-danger d-block">
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

