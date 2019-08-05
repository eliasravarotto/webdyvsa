<header class="encabezado navbar-fixed-top visible-xs visible-sm">
  <div class="container">
    <a href="#" class="logo">
      <img src="/imagenes/logos/logo-dyv.png">
    </a>
    <button type="button" id="sidebarCollapse" class="navbar-btn" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav id="menu-principal" class="collapse">
      <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/modelos">Modelos</a></li>
        <li><a href="/plan-de-ahorro">Plan de Ahorro</a></li>
        <li><a href="/financiacion">Financiación</a></li>
        <li>
          <a href="{{route('nuevo_plan_nacional')}}">
            <img src="{{asset('imagenes/plan-nacional.png')}}" height="30px"> Plan Nacional Agost0KM
          </a>
        </li>
        <li><a href="/usados">Usados</a></li>
        <li><a href="/posventa">Posventa</a></li>
        <li><a href="/responsabilidad-social-empresarial">RSE</a></li>
        <li><a href="{{route('rse')}}">RESPONSABILIDAD SOCIAL EMPRESARIAL</a></li>
        <li><a href="/contacto">Contacto</a></li>

      </ul>
    </nav>
  </div>
</header>

@if (Request::path() == '/')
{{-- <div class="bienvebidos visible-xs visible-sm" style="background: url(/imagenes/home/slide3mobile.png) no-repeat center bottom;
    background-size: cover;
    height: 90vh;">

  <div class="texto-encabezado" style="height: 100%; display: flex; flex-direction: column; justify-content: space-around;">
      <div class="container">
        <h1 class="text-center" onclick="location.href='/contacto#sucursales'"  style="background: rgb(0,0,0,0.6); color: white; border-radius: 5px; padding: 15px 10px;">Descubrí nuestras sucursales</h1>
      </div>

      <div class="flecha-bajar text-center">
        <a href="#">
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
      </div>
  </div>
</div> --}}
@endif

@if (Request::path() == 'plan-de-ahorro')
<div class="bienvebidos visible-xs visible-sm" style="background: url(/imagenes/tpa/nuevo_tpa.png) no-repeat center bottom;
    background-size: cover;
    height: 90vh;">
    {{-- <div class="bienvebidos visible-xs visible-sm" style="background: url(/imagenes/dyv_charata.jpg) no-repeat center bottom;
    background-size: cover;
    height: 90vh;"> --}}

  <div class="texto-encabezado" style="height: 100%; display: flex; flex-direction: column; justify-content: space-around;">
      <div class="container">
        {{-- <h1 class="text-center" onclick="location.href='/contacto#sucursales'"  style="background: rgb(0,0,0,0.6); color: white; border-radius: 5px; padding: 15px 10px;">Descubrí nuestras sucursales</h1> --}}
      </div>

      <div class="flecha-bajar text-center">
        <a href="#">
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
      </div>
  </div>
</div>
@endif

