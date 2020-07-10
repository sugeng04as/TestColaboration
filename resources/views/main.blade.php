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
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: rgb(255, 255, 255)"><span>Navbar</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-5 mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/pertanyaan" style="color: rgb(255, 255, 255)">Home</a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="#" style="color: rgb(255, 255, 255)">Option</a>
                </li>
            </ul>
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
            </div>
        </div>
      </nav>
      {{-- ENDNAVBAR --}}

      <div class="content mt-1">
          <div class="content-wraper">
            <div class="container">
                <div class="card">
                    <div class="card-header">

                        @yield('header')

                    </div>
                    <div class="card-body">

                        @yield('content')

                    </div>
                </div>
                
            </div>
          </div>
      </div>

<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>