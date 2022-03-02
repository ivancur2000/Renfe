<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
          Preferencias de usuario
        </h2>
    </x-slot>

    <section class="card">
      <article class="card-body">
        {!! Form::model($user, ['route'=>['user.update', $user], 'method' => 'put']) !!}
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
        <div class="mb-0 mt-2">
            <div class="d-flex justify-content-end align-items-baseline">
                <x-jet-button>
                  Asignar
                </x-jet-button>
            </div>
        </div>
        {!! Form::close() !!}
      </article>
    </section>
</x-app-layout>
