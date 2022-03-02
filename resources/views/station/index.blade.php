<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
          Rutas
        </h2>
    </x-slot>
    <section class="card">
      <article class="card-body">
    <table id='table' class="table">
      <thead>
        <tr>
          <th>Num.</th>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Ciudad</th>
          <th>Linea</th>
          <th>Precio</th>
          <th>Horario</th>
        </tr>
      </thead>
      <tbody>
        @foreach($stations as $station)
        <tr>
          <td>{{ $station->id }}</td>
          <td>{{ $station->name }}</td>
          <td>{{ $station->address }}</td>
          <td>{{ $station->line->city->name }}</td>
          <td>{{ $station->line->name }}</td>
          <td>{{ $station->price }} Bs</td>
          <td>{{ $station->schedule }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
      </article>
    </section>

    <script> 
      $(document).ready(()=>{
        $('#table').DataTable({
          responsive: true
        });
      });
    </script>
</x-app-layout>
