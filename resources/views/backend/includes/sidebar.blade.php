<ul class="list-unstyled">
        <li><a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
        <li>
            <a href="#ul_leads" data-toggle="collapse">
                <i class="fas fa-envelope"></i> Leads
            </a>
            <ul id="ul_leads" class="list-unstyled collapse">
                <li><a href="{{route('contacto_mensajes_index', 'contacto')}}">Contacto</a></li>
                <li><a href="{{route('contacto_mensajes_index', 'financiacion')}}">Financiacion</a></li>
                <li><a href="{{route('contacto_mensajes_index', 'usados')}}">Usados</a></li>
                <li><a href="{{route('testdrive_index')}}">Test Drive</a></li>
                <li><a href="{{route('contacto_mensajes_index', 'tpa')}}">Tpa</a></li>
                <li><a href="{{url('/admin/turnos-servicios')}}">Turnos</a></li>
            </ul>
        </li>
        <li>
            <a href="#ul_tpa" data-toggle="collapse">
                <i class="fa fa-car"></i> TPA
            </a>
            <ul id="ul_tpa" class="list-unstyled collapse">
                <li><a href="{{route('tpa_adjudicados.index')}}">Adjudicados</a></li>
                <li><a href="{{route('tpa_agrupados.index')}}">Avanzados/Agrupados</a></li>
            </ul>
        </li>
        <li>
            <a href="/admin/usados">
                <i class="fa fa-car"></i>
                USADOS
            </a>
        </li>
        <li>
            <a href="/admin/modelos">
                <i class="fa fa-car"></i>
                MODELOS
            </a>
        </li>
        <li>
            <a href="#ul_servicios" data-toggle="collapse">
                <i class="fas fa-wrench"></i> SERVICIOS
            </a>
            <ul id="ul_servicios" class="list-unstyled collapse">
                <li><a href="{{url('admin/servicios')}}">ABM</a></li>
                <li><a href="{{route('servicios_lista_precios')}}">Precios</a></li>
            </ul>
        </li>
        <li>
            <a href="{{url('admin/notificacion-push')}}">
                <i class="far fa-bell"></i>
                MENSAJE PUSH
            </a>
        </li>
        <li>
            <a href="{{route('posts.index')}}">
                <i class="far fa-file-alt"></i>
                ENTRADAS
            </a>
        </li>
</ul>