<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacy</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pharmacy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Pharmacy
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Dropdown -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Categories </a>
                     <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('categories.index')}}">All categories</a>
                  <a class="dropdown-item" href="{{route ('categories.create')}}">Add categories</a>
                     </div>
                   </li>
                   <!-- Dropdown -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Brands
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('brands.index')}}">All brands</a>
                            <a class="dropdown-item" href="{{ route ('brands.create')  }}">Add brands</a>
                          </div>
                        </li>

                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Products
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('products.index')}}">All products</a>
                            <a class="dropdown-item" href="{{ route('products.create')  }}">Add products</a>
                          </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Photos
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route ('photos.index') }}">All photos</a>
                            <a class="dropdown-item" href="{{ route('photos.create')  }}">Add photos</a>
                          </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Gauges
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route ('gauges.index') }}">All Gauges</a>
                            <a class="dropdown-item" href="{{ route('gauges.create')  }}">Add Ggauges</a>
                          </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Team
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('teams.index')}}">All Team</a>
                            <a class="dropdown-item" href="{{ route ('teams.create')  }}">Add Team</a>
                          </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Pharmacy
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('pharmacies.index')}}">All Pharmacies</a>
                            <a class="dropdown-item" href="{{ route ('pharmacies.create')  }}">Add Pharmacy</a>
                          </div>
                        </li>
                   </ul>
                </div>   
                  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
