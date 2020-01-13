@extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">LEADS</h4>
    {{-- <h6 class="card-subtitle mb-2 text-muted">Recibidos desde {{$from}}.</h6>     --}}
    <form class="form-inline" action="{{route('admin_leads')}}" method="get">
      {{ csrf_field() }}
      <div class="form-group mb-2 w-50">
        <select class="from-select form-control w-100"  multiple="multiple" name="filterBy[]">
          @foreach( $froms as $from )
              <option value="{{$from}}" @if($filterBy->contains($from)) selected @endif >{{$from}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mb-2 w-25">
        <button type="submit" class="btn btn-primary ml-1 w-100">Filtrar</button>
      </div>
      <div class="form-group mb-2 w-25">
        <button type="submit" class="btn btn-info ml-1 w-100">Limpiar</button>
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
            <td><a href="{{route('contacto_mensajes_show', [$mensaje->from, $mensaje->id])}}" class="btn btn-default"><i class="fa fa-eye"></i></a></td>
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
      placeholder: "Filtrar por"
    });
  });
</script>
@stop