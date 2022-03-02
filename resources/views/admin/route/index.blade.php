@extends('adminlte::page')

@section('title', 'Rutas')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Rutas</h1>
@stop

@section('content')
@if(session('create') == 'OK')
<section class="alert alert-success">
  Dato registrado con exito
</section>
@endif
@if(session('edit') == 'OK')
<section class="alert alert-success">
  Dato actualizado con exito
</section>
@endif
@if(session('delete') == 'OK')
<section class="alert alert-success">
  Dato eliminado con exito
</section>
@endif
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.route.create') }}" class="btn btn-outline-primary">
      Registrar <i class="fas fa-plus"></i> 
    </a>
  </header>
  <article class="card-body">
    <table id='table' class="table">
      <thead>
        <tr>
          <th>Num.</th>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Largo</th>
          <th>Duracion</th>
          <th>Descripcion</th>
          <th>Punto de partida</th>
          <th>Destino</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($routes as $route)
        <tr>
          <td>{{ $route->id }}</td>
          <td>{{ $route->name }}</td>
          <td>{{ $route->code }}</td>
          <td>{{ $route->longer }}</td>
          <td>{{ $route->duration }}</td>
          <td>{{ $route->description }}</td>
          <td>{{ $route->starting_station }}</td>
          <td>{{ $route->ending_station }}</td>
          <td>
            <a href="{{ route('admin.route.edit', $route) }}" class="btn btn-outline-success">
              <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('admin.route.destroy', $route) }}" method="POST">
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
      $('#table').DataTable({
        responsive: true
      });
    });
  </script>
@stop
