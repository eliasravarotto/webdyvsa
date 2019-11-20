 @extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">SERVICIOS</h4>
    <h6 class="card-subtitle mb-2 text-muted">Lista de precios</h6>
    <table class="table table-sm table-hover">
    <thead>
	    <tr>
	      <th>Tipo de Servicio</th>
	      <th>Etios</th>
	      <th>Corolla</th>
	      <th>Hilux</th>
	      <th>Hilux/SW4 4x4</th>
	      <th><a class="btn btn-info text-center" href="#" onclick="limpiarInputs( event )"> <i class="fa fa-trash"></i> Limpiar</a></th>
	    </tr>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
	    <tr>
	      <td><span id="servicio-nombre-{{$servicio->id}}">{{$servicio->nombre}}</span></td>
	      <td> <input class="form-control" type="number" id="servicio-{{$servicio->id}}-etios" value="{{$servicio->etios}}"></td>
	      <td> <input class="form-control" type="number" id="servicio-{{$servicio->id}}-corolla" value="{{$servicio->corolla}}"></td>
	      <td> <input class="form-control" type="number" id="servicio-{{$servicio->id}}-hilux" value="{{$servicio->hilux}}"></td>
	      <td> <input class="form-control" type="number" id="servicio-{{$servicio->id}}-hilux_sw4_4x4" value="{{$servicio->hilux_sw4_4x4}}"></td>
	      <td>
	      	<button type="submit" class="btn btn-outline-primary" onclick="guardar(event, {{$servicio->id}})"><i class="fas fa-save"></i></button>
	      	<img src="{{asset('/imagenes/check-animated.gif')}}" class="d-none ml-3" id="saved-{{$servicio->id}}" style="height: 30px">
	      </td>
	      @endforeach
	    </tr>
    </tbody>
    </table>
  </div>
</div>
@stop

@section('page-script')

<script>
	function limpiarInputs(e){
		e.preventDefault();
		$(':input').val('');
	}

	function guardar(e, servicio_id){
		e.preventDefault();
		var nombre = $('#servicio-nombre-'+servicio_id).text();
		var etios = $('#servicio-'+servicio_id+'-etios').val();
		var corolla = $('#servicio-'+servicio_id+'-corolla').val();
		var hilux = $('#servicio-'+servicio_id+'-hilux').val();
		var hilux_sw4_4x4 = $('#servicio-'+servicio_id+'-hilux_sw4_4x4').val();
		var yaris = '';
		var innova = '';
		var prius = '';
		// console.log(nombre);
		axios
			.put('/admin/servicios/'+servicio_id, {nombre, etios, corolla, hilux, hilux_sw4_4x4, yaris, innova, prius})
			.then(res => {
				if (res.status == 200) {
					$('#saved-'+servicio_id).removeClass('d-none');
					setTimeout( ()=>{$('#saved-'+servicio_id).addClass('d-none') }, 2100)
				}
			})
			.catch( ()=> alert('algo salio mal') );

	}
</script>

@stop