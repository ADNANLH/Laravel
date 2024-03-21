<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('test')</title>
</head>
<body>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('blog.index')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<div class="navbar-nav ms-auto ms-auto mb-2 mb-lg-0">
  @auth
      {{ \Illuminate\Support\Facades\Auth::user()->name}}
      <form class="nav-item" action="{{ route('auth.logout')}}" method="post">
          @method('delete')
          @csrf
          <button class="nav-link">Se déconnecter</button>
      </form>

  @endauth
  @guest
  <div class="nav-item">
    <a class="nav-link" href="{{ route('auth.login')}}">Se connecter</a>

  </div>
  @endguest
</div>
<div class="container">

    @yield('content')
</div>
</body>
</html>
