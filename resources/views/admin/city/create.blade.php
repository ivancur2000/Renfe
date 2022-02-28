@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Ciudades</h1>
@stop

@section('content')
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.city.index') }}" class="btn btn-outline-danger">
      Volver <i class="fas fa-arrow-left"></i>
    </a>
  </header>
  <article class="card-body">

    <x-jet-validation-errors class="mb-3 rounded-0" />

    <form method="POST" action="{{ route('admin.city.store') }}" novalidate>
        @csrf
        <div class="mb-3">
            <x-jet-label value="Nombre de la ciudad" />

            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                         name="name" :value="old('name')" required />
            <x-jet-input-error for="name"></x-jet-input-error>
        </div>

        <div class="mb-3">
            <x-jet-label value="Codigo" />

            <x-jet-input class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" type="text"
                         name="code" required />
            <x-jet-input-error for="code"></x-jet-input-error>
        </div>

        <div class="mb-0">
            <div class="d-flex justify-content-end align-items-baseline">
                <x-jet-button>
                    Registrar
                </x-jet-button>
            </div>
        </div>
    </form>

  </article>
</section>
@stop

@section('js')
  <script> </script>
@stop
