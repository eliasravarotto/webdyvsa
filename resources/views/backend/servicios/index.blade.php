@extends('backend.layout')

@section('content')
<div class="card border-info">
  <div class="card-header bg-default font-weight-bold">
        SERVICIOS
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-12 text-right">
        <a class="btn btn-default text-center" href="{{ route('admin_servicios.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
      </div>
    </div>

    <table class="table table-sm table-hover mt-3">
    <thead>
    <tr>
      <th>Modelo</th>
      <th>Publicado</th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($modelos as $modelo)
    <tr>
      <td>{{$modelo->nombre}}</td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="{{$modelo->id}}" @if($modelo->publicar_servicio == 1) checked @endif onclick="actualizarVisible(this);">
          <label class="custom-control-label" for="{{$modelo->id}}"></label>
        </div>
      </td>
      <td>
        {{-- <a href="{{ route('modelos.show', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
        <form action="{{ route('admin_servicios.destroy', ['id' => $modelo->id]) }}" method="post">
            <a href="{{ route('admin_servicios.edit', $modelo->id) }}" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
            {!! method_field('delete') !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
      </td>
      @endforeach
    </tr>
    </tbody>
    </table>
  </div>
</div>

       

@stop

@section('page-script')
<script type="text/javascript">
  function actualizarVisible(chk){
    var id = chk.id;
    var visible;

    if ($('#'+id).is(":checked")) { visible = 1 } else { visible = 0 }
    
    axios
        .post('/admin/modelos/publicar_servicio/'+id, { visible: visible })
        .then(function(res) {
            console.log(res.data)
        })
    }
</script>
@stop