<div>
	<div class="navbar-wrapper visible-md visible-lg" 
		 @if (Request::path() == '/') style="background: rgba(0,0,0,0.3)" @endif
		 @if (Request::path() != '/') style="position: relative; background:rgba(0,0,0,0.7) " @endif
		 >
        <div class="navbar navbar-static-top" style="">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="display: flex !important; justify-content: center;">
              <ul class="nav navbar-nav navbar-ppal fromLeft">
                <li class="dropdown dropdown-hover">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MODELOS <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-hover">
                  	@foreach(\App\Helpers\Helper::getModelos() as $modelo)
                    <li>
                    	<a class="text-uppercase" href="/modelos/{{$modelo->nombre}}">{{ $modelo->nombre }} @if($modelo->es_hibrido) <span class="label label-primary">HÍBRIDO</span>  @endif </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li><a href="/plan-de-ahorro">PLAN DE AHORRO</a></li>
                <li><a href="/financiacion">FINANCIACION</a></li>
                <li><a href="/usados">USADOS</a></li>
                <li class="dropdown dropdown-hover">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POSVENTA <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-hover">
                    <!-- <li><a href="/accesorios">Accesorios</a></li> -->
                    <li><a href="/posventa">Servicios Posventa</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/turno-servicios/create">Turnos ONLINE</a></li>
                  </ul>
                </li>
                <li><a href="{{route('rse')}}">RSE</a></li>
                {{-- <li class="dropdown dropdown-hover">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EMPRESA <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-hover">
                    <li><a href="/empresa#politica-ambiental">Política Ambiental</a></li>
                    <li><a href="{{route('rse')}}">Responsabilidad Social Empresarial</a></li>
                  </ul>
                </li> --}}
                {{-- <li><a href="/responsabilidad-social-empresarial">RSE</a></li> --}}
                <li class=""><a href="/contacto">CONTACTO</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div>
	</div>  
</div>