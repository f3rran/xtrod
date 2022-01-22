<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand ml-4 mr-4" href="/">XtroD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Otros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Otros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Deportes</a></li>
              <li><a class="dropdown-item" href="#">Info</a></li>
              <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="row collapse navbar-collapse">
        <form class="d-flex @if (Auth::user() === null) col-6 @else col-8 @endif">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-light" type="submit">Buscar</button>
        </form>
        @if (Auth::user() === null)
          <div class="col-6">
            <a type="button" class="btn btn-success" href="{{ route('login') }}">Iniciar sesión</a>
            <a type="button" class="btn btn-outline-light" href="{{ route('register') }}">Registrarse</a>
          </div>
        @endif
      </div>
    </div>
  </nav>