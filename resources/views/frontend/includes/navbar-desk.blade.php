<nav class="navbar-ppal navbar navbar-expand-lg d-none d-lg-block">
      <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item {{Request::path() == 'inicio' ? 'active' : ''}}">
            {{-- <a class="" href="/">INICIO</a> --}}
            <a class="nav-link" href="/">INICIO</a>
          </li>
          <li class="nav-item {{Request::path() == 'modelos' ? 'active' : ''}}">
            <a class="nav-link" href="#">MODELOS</a>
          </li>
          <li class="nav-item {{Request::path() == 'plan-de-ahorro' ? 'active' : ''}}">
            <a class="nav-link" href="/plan-de-ahorro">PLAN DE AHORRO</a>
          </li>
          <li class="nav-item">
            {{-- <a class="" href="/usados">USADOS</a> --}}
            <a class="nav-link" href="/usados">USADOS</a>
          </li>
          <li class="nav-item {{Request::path() == 'financiacion' ? 'active' : ''}}">
            {{-- <a class="" href="/financiacion">FINANCIACION</a> --}}
            <a class="nav-link" href="/financiacion">FINANCIACION</a>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            {{-- <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              POSVENTA
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/posventa">Servicios y Accesorios</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/turno-servicios/create">Turnos Online</a>
            </div>
          </li>
          <li class="">
            <a class="nav-link" href="#"> <img style="vertical-align: initial; width: 65px" src="{{asset('imagenes/kinto/logo-kinto.png')}}"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">RSE</a>
          </li>
          <li class="nav-item {{Request::path() == 'contacto' ? 'active' : ''}}">
            <a class="nav-link" href="/contacto">CONTACTO</a>
          </li>
        </ul>
      </div>
    </nav>