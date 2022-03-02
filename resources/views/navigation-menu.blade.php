
@php
  $links = [
    [
      'name' => 'Inicio',
      'route' => route('dashboard'),
      'active' => request()->routeIs('dashboard')
    ],
    [
      'name' => 'Preferencias de usuario',
      'route' => route('user.edit'),
      'active' => request()->routeIs('user.edit')
    ],
    [
      'name' => 'Rutas',
      'route' => route('route.index'),
      'active' => request()->routeIs('route.index')
    ],
    [
      'name' => 'Estaciones',
      'route' => route('station.index'),
      'active' => request()->routeIs('station.index')
    ],
    [
      'name' => 'Reporte del clima',
      'route' => route('wheather'),
      'active' => request()->routeIs('wheather')
    ]
  ]
@endphp
 <!-- Navbar content -->
 <nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom sticky-top">
{{-- <nav class="navbar navbar-dark bg-dark">

        <div class="container-fluid">
          <a class="navbar-brand" href="#">RENFE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SOBRE NOSOTROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACTANOS</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
            {{-- </ul>
          </div>
        </div>
      </nav> --}} 
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand me-4" href="/">
            <x-jet-application-mark width="36" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @foreach($links as $link)
                  <x-jet-nav-link href="{{ $link['route'] }}" :active="$link['active']">
                      {{ $link['name'] }}
                  </x-jet-nav-link>
                @endforeach
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav align-items-baseline">
                <!-- Settings Dropdown -->
                @auth
                    <x-jet-dropdown id="settingsDropdown">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @else
                                {{ Auth::user()->name }}

                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <h6 class="dropdown-header small text-muted">
                                {{ __('Manejo de cuenta') }}
                            </h6>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                {{ __('Panel de administrador') }}
                            </x-jet-dropdown-link>
                            <hr class="dropdown-divider">

                            <!-- Authentication -->
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-jet-dropdown-link>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                @endauth
            </ul>
        </div>
    </div>
</nav>
