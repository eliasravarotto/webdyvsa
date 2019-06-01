@extends('backend.layout')

@section('content')
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a href="/push" class="btn btn-info mr-2"><i class="fa fa-bell-o" aria-hidden="true"></i> Notificar</a>
            <a class="btn btn-primary" href="{{ route('usados.create') }}">Nuevo</a>
          </div>
        </div>
<div class="card" id="app_index">
    {{-- <div class="card-header">
        <strong class="card-title">Listado de Unidades Usadas</strong>
    </div> --}}
    <div class="card-body">
        <div class="form-inline">
          <div class="form-group mr-2 mb-2">
            <input type="number" id="nro-int" class="form-control" placeholder="Interno" onkeyup="filtrar(event)">
          </div>
          <button type="submit" class="btn btn-default mb-2" onclick="limpiar()">Limpiar</button>
        </div>
        <table class="table table-sm table-hover">
            <thead>
              <tr>
                <th>Int.</th>
                <th>Dominio</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Km - Año - Color</th>
                <th>Precio</th>
                <th>Disp.</th>
                <th>Visible</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tbody-usados">
                @foreach($usados as $usado)
                <tr class="usado-row" id="usado-row-{{$usado->interno}}">
                    <td id="usado-int">{{ $usado->interno }}</td>
                    <td>{{ $usado->dominio }}</td>
                    <td>{{ $usado->marca }}</td>
                    <td>{{str_limit(strip_tags($usado->modelo), 12, '...')}}</td>
                    <td>{{ $usado->km }} km - {{ $usado->anio }} - {{$usado->color}}</td>
                    <td><b>$ {{ $usado->precio }}</b></td>
                    <td>@if($usado->estado == "DISPONIBLE") <i class="fa fa-check text-success" aria-hidden="true"></i>@else <i class="fa fa-minus-circle text-danger" aria-hidden="true"></i> @endif</td>
                    <td>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="{{$usado->id}}" @if($usado->visible == 1) checked @endif onclick="actualizarVisible(this);">
                          <label class="custom-control-label" for="{{$usado->id}}"></label>
                        </div>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('usados.destroy', $usado->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              <a href="{{ route('usados.edit', $usado->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              <button onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-outline-danger delete-user"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
		</table>
	</div>
</div>
@stop

@section('page-script')
<script type="text/javascript">
    function filtrar(e){
        e.preventDefault();
        var interno = document.getElementById("nro-int").value;

        $('#tbody-usados tr').each(function(){

            var value = $(this).find('#usado-int').html();
            interno = interno.toString();
            //console.log(value == interno);
            if (value != interno){
               $('#usado-row-'+value).hide();
            } else{
               $('#usado-row-'+value).show();
           }
        });

        if (interno == '') {
            $('.usado-row').show();
        }

    }

    function limpiar()
    {
        interno = '';
        document.getElementById("nro-int").value = '';
        $('.usado-row').show();
    }

    function actualizarVisible(chk){
        var id = chk.id;
        var visible;

        if ($('#'+id).is(":checked")) { visible = 1 } else { visible = 0 }
        
        axios
            .get('/admin/usados/actualizar-visible/'+id, { params: { visible: visible }})
            .then(function(res) {
                console.log(res.data)
            })
    }
</script>
@stop