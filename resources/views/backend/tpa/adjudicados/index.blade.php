@extends('backend.layout')

@section('content')
	@if(session()->has('success'))
		<div class="alert alert-success" role="alert">
		  {{session('success')}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	@endif
    <div class="row">
      <div class="col-md-12 d-flex justify-content-end" style="margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('tpa_adjudicados.create') }}">Nuevo</a>
      </div>
    </div>
    <div class="card" id="app_index">
        <div class="card-body">
            <div class="form-inline">
              <div class="form-group mr-2 mb-2">
                <input type="number" id="nro-int" class="form-control" placeholder="Interno" onkeyup="filtrar(event)">
              </div>
              <div class="form-group mr-2 mb-2">
                <input type="text" id="nro-dom" class="form-control" placeholder="Dominio" onkeyup="filtrar(event)">
              </div>
              <button type="submit" class="btn btn-default mb-2" onclick="limpiar()">Limpiar</button>
            </div>

            <div class="">
            <table class="table table-sm table-hover">
                <thead>
                  <tr>
                    <th>Grupo</th>
                    <th>Orden</th>
                    <th>Unidad</th>
                    <th>Modalidad</th>
                    <th>Avance Cuotas</th>
                    <th>Precio Venta</th>
                    <th>Cuota Pura</th>
                    <th>Created at</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tbody-usados">
                    @foreach($adjudicados as $adjudicado)
                    <tr class="adjudicado-row adjudicado-row-{{$adjudicado->grupo}} adjudicado-row-{{$adjudicado->orden}}" id="adjudicado-row-{{$adjudicado->grupo}}-{{$adjudicado->orden}}">
                        <td id="adjudicado-int">{{ $adjudicado->grupo }}</td>
                        <td id="adjudicado-dom">{{ $adjudicado->orden }}</td>
                        <td>{{ $adjudicado->unidad }}</td>
                        <td class="text-center">{{$adjudicado->modalidad}}</td>
                        <td class="text-center">{{ $adjudicado->avance_cuotas }}</td>
                        <td><b>$ {{ $adjudicado->precio_venta }}</b></td>
                        <td><b>$ {{ $adjudicado->cuota_pura }}</b></td>
                        <td> {{ $adjudicado->created_at }}</td>
                        <td>
                            <form method="POST" action="{{ route('tpa_adjudicados.destroy', $adjudicado->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                  <a href="{{ route('tpa_adjudicados.edit', $adjudicado->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                  <button onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-outline-danger delete-user"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    		</table>
            </div>
    	</div>
    </div>
@stop

@section('page-script')
<script type="text/javascript">
    function filtrar(e){
        e.preventDefault();
        var valor_a_buscar;
        var id_filtrar_por;

        if (e.target.id == 'nro-dom'){
            target_id_filtrar_por = '#adjudicado-dom';
            valor_a_buscar = document.getElementById("nro-dom").value;
            document.getElementById("nro-int").value = '';
        }
        if(e.target.id == 'nro-int'){
            target_id_filtrar_por = '#adjudicado-int';
            valor_a_buscar = document.getElementById("nro-int").value;
            document.getElementById("nro-dom").value = '';
        }

        $('.adjudicado-row').hide();
        $('#tbody-adjudicados tr').each(function(){
        //$('#ul-adjudicados li').each(function(){
            var value = $(this).find(target_id_filtrar_por).html();
            valor_a_buscar = valor_a_buscar.toString().toUpperCase();

            if (target_id_filtrar_por == '#adjudicado-dom'){
                if(value.includes(valor_a_buscar)){
                    $('.adjudicado-row-'+value).show();
                    return;
                };
            }

            if (value != valor_a_buscar){
               $('.adjudicado-row-'+value).hide();
            } else{
               $('.adjudicado-row-'+value).show();
           }

        });

        if (valor_a_buscar == '') {
            $('.adjudicado-row').show();
        }

    }

    function limpiar()
    {
        interno = '';
        document.getElementById("nro-int").value = '';
        document.getElementById("nro-dom").value = '';
        $('.adjudicado-row').show();
    }

</script>
@stop