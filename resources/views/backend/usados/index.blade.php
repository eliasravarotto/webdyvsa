@extends('backend.sufee_admin.index')

@section('content')

    @if (session('success'))
      <div class="alert alert-warning alert-dismissible toast" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('success') }}
      </div>
    @endif

<div class="card" id="app_index">
    <div class="card-header">
        <strong class="card-title">Listado de Unidades Usadas</strong>
    </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('usados.create') }}">Nuevo</a>
          </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Dominio</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Año</th>
                <th>Km</th>
                <th>Precio</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($usados as $usado)
                <tr id="usado_{{$usado->id}}">
                    <td>{{ $usado->id }}</td>
                    <td>{{ $usado->dominio }}</td>
                    <td>{{ $usado->modelo }}</td>
                    <td>{{ $usado->marca }}</td>
                    <td>{{ $usado->anio }}</td>
                    <td>{{ $usado->km }}</td>
                    <td>$ {{ $usado->precio }}</td>
                    <td>
                        <a href="{{ route('usados.edit', $usado->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-outline-danger" v-on:click="borrar({{collect($usado)}})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
		</table>
	</div>
</div>
@stop

@section('script')
<script>
    new Vue ({
    el: '#app_index',
    data: {
        index: '',
        
    },
    mounted(){
        
    },
    methods:{
        borrar(usado){
            swal({
                  title: 'Desea eliminar '+usado.marca+' '+usado.modelo+ ' '+usado.dominio+'?',
                  //text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  cancelButtonColor: '#3085d6',
                  confirmButtonColor: '#d33',
                  confirmButtonText: 'Eliminar'
                }).then((result) => {
                  if (result) {
                    axios
                        .delete('/admin/usados/'+usado.id)
                        .then((res) => { 
                            if (res.status == 200){
                                $('#usado_'+usado.id).fadeOut(400, function() {
                                     $(this).remove(); 
                                });
                            }
                        })
                  }
                })
        }
    }
})
</script>
@stop