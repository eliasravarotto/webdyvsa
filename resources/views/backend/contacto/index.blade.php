@extends('backend.layout')

@section('content')
<div class="card border-info">
  <div class="card-header bg-default font-weight-bold">
    LEADS
  </div>
  <div class="card-body">
    {{-- <h6 class="card-subtitle mb-2 text-muted">Recibidos desde {{$from}}.</h6>     --}}
    <form class="" action="{{route('admin_leads')}}" method="get">
      <div class="form-row">
        <div class="col-md-3 mb-1">
          <input class="form-control w-100" type="date" name="desde" value="{{ $desde }}" placeholder="Desde">
        </div>
        <div class="col-md-3 mb-1">
          <input class="form-control w-100" type="date" name="hasta" value="{{ $hasta }}" placeholder="hasta">
        </div>
        <div class="col-md-6 mb-1">
          <select class="from-select form-control w-100"  multiple="multiple" name="filterFroms[]">
            @foreach( $froms as $from )
                <option value="{{$from}}" @if($filterFroms->contains($from)) selected @endif >{{$from}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-row mb-1">
        <div class="col-md-6 mb-1">
          <input class="form-control w-100" type="text" name="cliente" value="{{ $cliente }}" placeholder="Cliente">
        </div>
        <div class="col-md-3 mb-1">
          <button type="submit" class="btn btn-default w-100"><i class="fas fa-filter"></i> Filtrar</button>
        </div>
        <div class="col-md-3 mb-1">
          <a href="{{route('admin_leads')}}" class="btn btn-default w-100">Limpiar</a>
        </div>
      </div>
    </form>  
    <table class="table table-sm table-hover table-responsive-xl mt-4">
        <thead style="background-color: #d13748; color: white;">
          <tr>
            <th class="w-10">Creado</th>
            <th>From</th>
            <th class="w-40">Cliente</th>
            <th>Mensaje</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($mensajes as $mensaje)
          <tr>
            <td><a href="{{route('contacto_mensajes_show', $mensaje->id)}}">{{ date('d-m-Y', strtotime($mensaje->created_at))}}</a></td>
            <td>{{ $mensaje->from }}</td>
            <td>
                <b> {{ $mensaje->cliente}}</b>
                <p class="text-muted">
                  <span><b>Email:</b> {{$mensaje->email}}</span>
                  <span><b>Teléfono:</b> {{$mensaje->telefono}}</span>
                </p>
            </td>
            <td>
              @if(strlen($mensaje->mensaje) > 70)
                {{ substr($mensaje->mensaje, 0, 70) . '...'}}
              @else
                {{$mensaje->mensaje}}
              @endif
            </td>
            @endforeach
          </tr>
        </tbody>
    </table>
</div>

@stop

@section('page-script')
<script type="text/javascript">
  $(document).ready(function() {
    $('.from-select').select2({
      placeholder: "Recibido desde",
      width: '100%'
    });
  });
</script>
@stop