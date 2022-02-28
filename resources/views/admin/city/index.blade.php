@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Ciudades</h1>
@stop

@section('content')
<section class="card">
  <header class="card-header text-center">
    <a href="{{ route('admin.city.create') }}" class="btn btn-outline-primary">
      Registrar <i class="fas fa-plus"></i> 
    </a>
  </header>
  <article class="card-body">
    <table id='cityTable' class="table">
      <thead>
        <tr>
          <th>Num.</th>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cities as $city)
        <tr>
          <td>{{ $city['id'] }}</td>
          <td>{{ $city['name'] }}</td>
          <td>{{ $city['code'] }}</td>
          <td>
            <button class="btn btn-outline-success">
              <i class="fas fa-edit"></i>
            </button>
            <button class="btn btn-outline-danger">
              <i class="fas fa-trash"></i>
            </button>
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
      $('#cityTable').DataTable({
        responsive: true
      });
    });
  </script>
@stop
