@extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">LEADS</h4>
    {{-- <h6 class="card-subtitle mb-2 text-muted">Recibidos desde {{$from}}.</h6>     --}}
    <form class="" action="{{route('admin_leads')}}" method="get">
      <div class="form-row mb-1">
        <div class="col-md-3 ">
          <input class="form-control w-100" type="date" name="desde" value="{{ $desde }}" placeholder="Desde">
        </div>
        <div class="col-md-3 ">
          <input class="form-control w-100" type="date" name="hasta" value="{{ $hasta }}" placeholder="hasta">
        </div>
        <div class="col-md-6 ">
          <input class="form-control w-100" type="text" name="cliente" value="{{ $cliente }}" placeholder="Cliente">
        </div>
      </div>
      <div class="form-row mb-1">
        <div class="col-md-6">
          <select class="from-select form-control w-100"  multiple="multiple" name="filterFroms[]">
            @foreach( $froms as $from )
                <option value="{{$from}}" @if($filterFroms->contains($from)) selected @endif >{{$from}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-primary w-100">Filtrar</button>
        </div>
        <div class="col-md-3">
          <a href="{{route('admin_leads')}}" class="btn btn-info w-100">Limpiar</a>
        </div>
      </div>
    </form>  
    <table class="table table-sm table-hover table-responsive-xl">
        <thead>
          <tr>
            <th>Created</th>
            <th>From</th>
            <th>Cliente</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($mensajes as $mensaje)
          <tr>
            <td>{{ date('d-m-Y', strtotime($mensaje->created_at))}}</td>
            <td>{{ $mensaje->from }}</td>
            <td>
              @if(strlen($mensaje->cliente) > 25)
                {{ substr($mensaje->cliente, 0, 25) . '...'}}
              @else
                {{$mensaje->cliente}}
              @endif
            </td>
            <td>
               @if(strlen($mensaje->email) > 25)
                {{ substr($mensaje->email, 0, 25) . '...'}}
              @else
                {{$mensaje->email}}
              @endif
            </td>
            <td>
              @if(strlen($mensaje->mensaje) > 35)
                {{ substr($mensaje->mensaje, 0, 35) . '...'}}
              @else
                {{$mensaje->mensaje}}
              @endif
            </td>
            <td><a href="{{route('contacto_mensajes_show', $mensaje->id)}}" class="btn btn-default"><i class="fa fa-eye"></i></a></td>
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
      placeholder: "Filtrar por",
      width: '100%'
    });
  });
</script>
@stop