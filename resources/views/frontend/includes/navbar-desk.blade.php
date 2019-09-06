<div>
	<div class="navbar-wrapper visible-md visible-lg">
        <div class="navbar navbar-static-top" style="">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-ppal fromLeft d-flex justify-content-center" style="width: 100%;">
                  <li class="{{Request::path() == '/' ? 'active' : ''}}"><a href="/">INICIO</a></li>
                  <li class="{{Request::path() == 'modelos' ? 'active' : ''}}"><a href="/modelos">MODELOS</a></li>
                  <li class="{{Request::path() == 'plan-de-ahorro' ? 'active' : ''}}"><a href="/plan-de-ahorro">PLAN DE AHORRO</a></li>
                  <li class="{{Request::path() == 'financiacion' ? 'active' : ''}}"><a href="/financiacion">FINANCIACION</a></li>
                  <li><a href="/usados">USADOS</a></li>
                  <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POSVENTA <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-hover">
                      <li><a href="/posventa">Servicios Posventa</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="/turno-servicios/create">Turnos ONLINE</a></li>
                    </ul>
                  </li>
                  <li class=""><a href="{{route('rse')}}">RSE</a></li>
                  <li class="{{Request::path() == 'contacto' ? 'active' : ''}}"><a href="/contacto">CONTACTO</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
	</div>  
</div>