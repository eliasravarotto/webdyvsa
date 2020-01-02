<header id="navbar-fixed" class="encabezado visible-xs visible-sm d-block d-lg-none d-xl-none">
  <div class="container">
    <a href="/" class="logo">
      <img src="{{ asset('/imagenes/logos/logo-diciembre.png') }}" alt="logo derka y vargas">
    </a>
    <button type="button" id="sidebarCollapse" class="navbar-btn-mobile" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav id="menu-principal" class="collapse">
      <ul>
        <li class="{{Request::path() == '/' ? 'active' : ''}}"><a href="/">Inicio</a></li>
        <li class="{{Request::path() == 'modelos' ? 'active' : ''}}"><a href="/modelos">Modelos</a></li>
        <li class="{{Request::path() == 'plan-de-ahorro' ? 'active' : ''}}"><a href="/plan-de-ahorro">Plan de Ahorro</a></li>
        <li class="{{Request::path() == 'financiacion' ? 'active' : ''}}"><a href="/financiacion">Financiación</a></li>
        <li class="{{Request::path() == 'usados' ? 'active' : ''}}"><a href="/usados">Usados</a></li>
        <li class="{{Request::path() == 'posventa' ? 'active' : ''}}"><a href="/posventa">Posventa</a></li>
        <li class="{{Request::path() == route('mobility_services') ? 'active' : ''}}"><a href="{{route('mobility_services')}}">Mobility</a></li>
        <li class="{{Request::path() == 'responsabilidad-social-empresarial' ? 'active' : ''}}"><a href="{{route('rse')}}">RESPONSABILIDAD SOCIAL EMPRESARIAL</a></li>
        <li class="{{Request::path() == 'contacto' ? 'active' : ''}}"><a href="/contacto">Contacto</a></li>
      </ul>
    </nav>
  </div>
</header>