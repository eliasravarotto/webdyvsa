@extends('backend.layout')

@section('content')
  <div class="card border-info">
    <div class="card-body">

      <div class="card-panel">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="d-flex align-items-center">
              <div class="icon-header bg-warning"><i class="fas fa-users"></i></div>
              <div class="d-block">
                  <h5 class="card-title mb-0">LEADS</h5>
                <small class="text-muted">usuarios en total.</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-8 text-right">
            <a href="{{ route('usuarios.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
          </div>
        </div>
      </div>

      <form class="" action="{{route('messages.index')}}" method="get">
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
            <button type="submit" class="btn btn-danger w-100"><i class="fas fa-filter"></i> Filtrar</button>
          </div>
          <div class="col-md-3 mb-1">
            <a href="{{route('messages.index')}}" class="btn btn-secondary w-100">Limpiar</a>
          </div>
        </div>
      </form>

      <table class="table table-sm table-hover table-responsive-xl mt-4">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Detalle</th>
          </tr>
        </thead>
        <tbody>
          @foreach($messages as $mensaje)
          <tr>
            <td><a href="{{route('messages.show', $mensaje->id)}}">{{ date('d-m-Y', strtotime($mensaje->created_at))}}</a></td>
            <td>
                <b>{{ $mensaje->name}}</b> | <span>{{$mensaje->email}}</span> | <span>{{$mensaje->phone}}</span>
                <p><span class="badge badge-default">{{ $mensaje->from }}</span></p>
            </td>
            @endforeach
          </tr>
        </tbody>
      </table>

      <div class="d-flex justify-content-center mt-3">
          {{ $messages->links('backend.includes.pagination') }}
      </div>

    </div>
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