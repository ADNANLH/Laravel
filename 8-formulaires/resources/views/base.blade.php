{{--
  Un moteur de template Blade est un composant 
  du framework PHP Laravel qui permet de gérer 
  les vues et de générer du contenu HTML de manière plus fluide et structurée. 
  Blade est le moteur de template par défaut de Laravel, 
  et il offre plusieurs fonctionnalités utiles pour faciliter la création de vues web. 
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        @layer demo {
            button {
                all : unset;
            }
        }
    </style>
</head>
<body>
  @php
    $routeName = request()->route()->getName() ;
  @endphp

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('blog.index')}}">My blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a @class (['nav-link', 'active' => str_starts_with($routeName, 'blog.') ])aria-current="page" href="{{ route('blog.index')}}">Blog</a>
              
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">
      {{-- @dump(request()->route()->getName()) get the route of the view   "blog.index" // resources\views/base.blade.php --}}
      @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>     
      @endif
      @yield('content')
    </div>
    
</body>
</html>