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
              <th>Largo</th>
              <th>Duracion</th>
              <th>Descripcion</th>
              <th>Punto de partida</th>
              <th>Destino</th>
            </tr>
          </thead>
          <tbody>
            @foreach($routes as $route)
            <tr>
              <td>{{ $route->id }}</td>
              <td>{{ $route->name }}</td>
              <td>{{ $route->longer }}</td>
              <td>{{ $route->duration }}</td>
              <td>{{ $route->description }}</td>
              <td>{{ $route->starting_station }}</td>
              <td>{{ $route->ending_station }}</td>
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
