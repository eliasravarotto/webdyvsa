<ul class="list-unstyled">
    @if(Auth::user()->hasRoles([1]))
    <li><a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
    <li>
        <a href="#ul_leads" data-toggle="collapse">
            <i class="fas fa-envelope"></i> Mensajes
        </a>
        <ul id="ul_leads" class="list-unstyled collapse">
            <li><a href="{{route('admin_leads')}}">Leads</a></li>
            <li><a href="{{route('testdrive_index')}}">Test Drive</a></li>
        </ul>
    </li>
    <li>
        <a href="{{route('panel_tpa')}}">
            <i class="fa fa-car"></i>
            TPA
        </a>
    </li>
    <li>
        <a href="/admin/usados">
            <i class="fa fa-car"></i>
            Usados
        </a>
    </li>
    <li>
        <a href="/admin/modelos">
            <i class="fa fa-car"></i>
            Modelos
        </a>
    </li>
    @endif
    <li class="mt-3">
        <span class="sidebar-header">POSVENTA</span>
    </li>
    @if(Auth::user()->hasRoles([1]))
    <li>
        <a href="{{route('admin_servicios.index')}}"> <i class="fas fa-wrench"></i> Servicios</a>
    </li>
    <li>
        <a href="{{url('/admin/turnos-servicios')}}"><i class="fa fa-ticket-alt"></i> Turnos</a>
    </li>
    @endif
    @if(Auth::user()->hasRoles([1,2]))
    <li>
        <a href="{{url('/admin_accesorios')}}"><i class="fas fa-dolly"></i> Accesorios</a>
    </li>
    @endif
    @if(Auth::user()->hasRoles([1]))
    <li class="mt-3">
        <span class="sidebar-header">ADMINISTACIÓN</span>
    </li>
    <li>
        <a href="{{route('posts.index')}}">
            <i class="far fa-newspaper"></i>
            Entradas
        </a>
    </li>
    <li>
        <a href="/admin_slides">
            <i class="fas fa-image"></i>
            Slides
        </a>
    </li>
    <li>
        <a href="{{url('admin/notificacion-push')}}">
            <i class="far fa-bell"></i>
            Mensajes Push
        </a>
    </li>
    <li>
        <a href="{{ route('usuarios.index') }}">
            <i class="far fa-user"></i>
            Usuarios
        </a>
    </li>
    @endif
</ul>