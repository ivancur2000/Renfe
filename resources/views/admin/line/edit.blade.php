@extends('adminlte::page')

@section('title', 'Lineas')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Lineas</h1>
@stop

@section('content')
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.line.index') }}" class="btn btn-outline-danger">
      Volver <i class="fas fa-arrow-left"></i>
    </a>
  </header>

  <article class="card-body">

    <x-jet-validation-errors class="mb-3 rounded-0" />
    
    {!! Form::model($line, ['route'=>['admin.line.update', $line], 'method' => 'put']) !!}
      {!! Form::label('name', 'Nombre de la linea') !!}
      {!! Form::text('name', null, ['class'=>'form-control '.($errors->has('name') ? ' is-invalid' : ''  )]) !!}
      @error('name')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('code', 'Codigo de la linea') !!}
      {!! Form::text('code', null, ['class'=>'form-control '.($errors->has('code') ? ' is-invalid' : ''  )]) !!}
      @error('code')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      {!! Form::label('city_id', 'Ciudad') !!}
      {!! Form::select('city_id', $cities, null, ['class'=>'form-control '.($errors->has('city_id') ? ' is-invalid' : '' ) ]) !!}
      @error('city_id')
        <strong class="text-danger d-block">
          {{ $message }}
        </strong>
      @enderror

      <div class="mb-0 mt-2">
          <div class="d-flex justify-content-end align-items-baseline">
              <x-jet-button>
                  Actualizar
              </x-jet-button>
          </div>
      </div>
    {!! Form::close() !!}

  </article>
</section>
@stop

