@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="p-4 shadow-lg rounded-pill bg-white text-center">Usuarios</h1>
@stop

@section('content')
@if(session('edit') == 'OK')
<section class="alert alert-success">
  Dato actualizado con exito
</section>
@endif
<section class="card">
  <article class="card-body">
    <table id='table' class="table">
      <thead>
        <tr>
          <th>Num.</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Rol</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->getRoleNames()[0]}}</td>
          <td>
            <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-outline-success">
              <i class="fas fa-edit"></i>
            </a>
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
