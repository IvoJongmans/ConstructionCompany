<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @yield('css')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('script')
    <title>Bouwbedrijf - @yield('title')</title>
</head>

<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="{{ route('home') }}">
    <img src="{{ asset('navbar/construction.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
    De Ruiter B.V.
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Over Ons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Onze Filosofie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/creator"> Woning Creator</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Informatie
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Contact</a>
          <a class="dropdown-item" href="#">Vacatures</a>
          <a class="dropdown-item" href="#">Brochure</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        @if(Auth::guard('gebruiker')->check())
        <li class="nav-item">
            Welkom {{Auth::guard('gebruiker')->user()->name}}
            </li>
        <li class="nav-item">
              <a href="{{ url('/logout') }}"> logout </a>
            </li>

        @else
        <li class="nav-item">
                <a class="nav-link" href="/login"><img src="{{ asset('navbar/login.png') }}" width="30" height="30" alt=""></a>
            </li>
        @endif



        </ul>
  </div>
</nav>

    @yield('content')

</body>
</html>
