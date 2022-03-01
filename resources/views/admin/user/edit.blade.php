@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Usuarios</h1>
@stop

@section('content')
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.user.index') }}" class="btn btn-outline-danger">
      Volver <i class="fas fa-arrow-left"></i>
    </a>
  </header>
  <article class="card-body">

    <x-jet-validation-errors class="mb-3 rounded-0" />
   {!! Form::model($user, ['route' => ['admin.user.update', $user], 'method'=> 'put']) !!}

  @foreach ($roles as $role)
      <div>
          <label>
              {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
              {{ $role->name }}
          </label>
      </div>
  @endforeach
      {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
  </article>
</section>
@stop

@section('js')
  <script> </script>
@stop
