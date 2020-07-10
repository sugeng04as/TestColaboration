<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Sendiri</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/fontawesome/css/all.css')}}">
</head>
<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: rgb(255, 255, 255)"><span>Final Project</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-5 mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/pertanyaan" style="color: rgb(255, 255, 255)">Questions</a>
                    </li>
                    <li class="nav-item active ml-2">
                        <a class="nav-link" href="#" style="color: rgb(199, 199, 199)">Optionals</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" style="color: rgb(255, 255, 255)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    {{-- SEARCH --}}
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                            <button class="badge badge-dark" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                    </form>
                    {{-- ENDSEARCH --}}
      </nav>
      {{-- ENDNAVBAR --}}

      <div class="content mt-1">
          <div class="content-wraper">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h5 style="text-align: center">
                            @yield('header')
                        </h5>
                    </div>
                    <div class="card-body">

                        @yield('content')
                        <img src="{{asset('/img/erd.png')}}">
                    </div>
                </div>
                
            </div>
          </div>
      </div>

<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>