<nav class="navbar navbar-dark bg-white fixed-top container">
  <div class="container-fluid">
    <a class="navbar-brand bg-dark" href="{{route('home')}}"><img src={{asset('images/logo-175.png')}} alt=""></a>
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MonPersonnel.bj</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      @if(!Auth::check())
      <div class="login-controls p-4">
        <button class="" style="margin-right: 10px"><a href="{{route('login')}}" class="text-white">Login</a></button>
        <button class="" style="margin-left: 10px" > <a href="{{route('register')}}" class="text-white">Register</a></button>
      </div>
      @endif
      @if(Auth::check())
      <div class="row">
        <a><img src="{{asset('storage/uploads/'.$photo)}}" class="profile-image2" alt="Avatar"> {{ Auth::user()->prenom }}</a>
        @auth
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <i class="fa-solid fa-right-from-bracket" style="margin-left:20px;"></i>
          </form>
        @endauth
      </div>
      @endif
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('services')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Cuisine</a></li>
              <li><a class="dropdown-item" href="#">Nettoyage</a></li>
              <li><a class="dropdown-item" href={{route('chauffeur')}}>Chauffeur</a></li>
              <li><a class="dropdown-item" href="#">Coursier</a></li>
              <li><a class="dropdown-item" href="#">Nursing</a></li>
              <li><a class="dropdown-item" href="#">Personnel de Maison</a></li>
              <li><a class="dropdown-item" href="#">Nounou</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacter')}}">Contact</a>
          </li>         
        
          <li class="nav-item">
            <a class="nav-link" href="{{route('voirworkers')}}">Tous les travailleurs</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="{{route('disclaimer')}}">Disclaimer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('filtres')}}">Recherche Avancee</a>
          </li>    
         </ul>  
        <form class="d-flex mt-3" role="search" method="post" action="{{route('search')}}">
          @csrf
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn" type="submit">Rechercher</button>
        </form>

      </div>
    </div>
  </div>
</nav>
