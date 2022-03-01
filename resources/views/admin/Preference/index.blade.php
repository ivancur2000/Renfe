@extends('adminlte::page')

@section('title', 'Preferencias')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Preferencias</h1>
@stop

@section('content')
@if(session('register') == 'OK')
<section class="alert alert-success">
  Dato registrado con exito
</section>
@endif
@if(session('edit') == 'OK')
<section class="alert alert-success">
  Dato actualizado con exito
</section>
@if(session('delete') == 'OK')
<section class="alert alert-success">
  Dato eliminado con exito
</section>
@endif
@endif
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.preference.create') }}" class="btn btn-outline-primary">
      Registrar <i class="fas fa-plus"></i> 
    </a>
  </header>
  <article class="card-body">
    <table id='preferenceTable' class="table">
      <thead>
        <tr>
          <th>Num.</th>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($preferences as $preference)
        <tr>
          <td>{{ $preference['id'] }}</td>
          <td>{{ $preference['name'] }}</td>
          <td>{{ $preference['code'] }}</td>
          <td>
            <a href="{{ route('admin.preference.edit', $preference) }}" class="btn btn-outline-success">
              <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('admin.preference.destroy', $preference) }}" method="POST">
              @method('DELETE')
              @csrf
              <button class="btn btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </article>
</section>
@stop

@section('js')
  <script> 
    $(document).ready(()=>{
      $('#preferenceTable').DataTable({
        responsive: true
      });
    });
  </script>
@stop
