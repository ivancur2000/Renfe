@extends('adminlte::page')

@section('title', 'Estaciones')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Estaciones</h1>
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
    <a href="{{ route('admin.station.create') }}" class="btn btn-outline-primary">
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
          <th>Direccion</th>
          <th>Ciudad</th>
          <th>Linea</th>
          <th>Precio</th>
          <th>Horario</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($stations as $station)
        <tr>
          <td>{{ $station->id }}</td>
          <td>{{ $station->name }}</td>
          <td>{{ $station->code }}</td>
          <td>{{ $station->address }}</td>
          <td>{{ $station->line->city->name }}</td>
          <td>{{ $station->line->name }}</td>
          <td>{{ $station->price }} Bs</td>
          <td>{{ $station->schedule }}</td>
          <td>
            <a href="{{ route('admin.station.edit', $station) }}" class="btn btn-outline-success">
              <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('admin.station.destroy', $station) }}" method="POST">
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
