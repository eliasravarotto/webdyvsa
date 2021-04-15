@extends('backend.layout')

@section('stylesheet')
<style type="text/css">
    .precio{
        color: black;
    }
    .precio:hover{
        color: black;
        text-decoration: none;
    }
    .td-marca-mod-ver p{
        font-size: 13px;
    }
</style>
@stop


@section('content')

    <div class="card border-info" id="app_index">
        <div class="card-body">

            <div class="card-panel mb-4">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="d-flex align-items-center">
                            <div class="icon-header bg-warning"><i class="fa fa-car"></i></div>
                            <div class="d-block">
                                    <h5 class="card-title mb-0">USADOS</h5>
                                <small class="text-muted">{{ $usados->count() }} vehículos en total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 text-right">
                        <a href="{{ route('usados.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
                    </div>
                </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-3 col-sm-12 mb-2">
                <input type="number" id="nro-int" class="form-control" placeholder="Interno" onkeyup="filtrar(event)">
              </div>
              <div class="form-group col-md-3 col-sm-12 mb-2">
                <input type="text" id="nro-dom" class="form-control" placeholder="Dominio" onkeyup="filtrar(event)">
              </div>
              <div class="col-md-2 col-sm-12">
              <button type="submit" class="btn btn-secondary mb-2 w-100" onclick="limpiar()">Limpiar</button>
              </div>
            </div>

            <!-- WEB -->
            <div class="d-none d-md-block d-lg-block d-xl-block">
                <table class="table table-sm">
                    <thead class="thead-light">
                      <tr>
                        <th></th>
                        <th>Int. | Dominio</th>
                        {{-- <th>Dominio</th> --}}
                        <th>Detalles</th>
                        <th></th>
                        <th></th>
                        <th>Visible</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="tbody-usados">
                        @foreach($usados as $usado)
                        <tr class="usado-row usado-row-{{$usado->interno}} usado-row-{{$usado->dominio}} @if($usado->estado == 'RESERVADO') table-danger @endif" id="usado-row-{{$usado->interno}}">
                            <td>
                                <div style="height: 34px; width: 45px;">
                                    @if($usado->foto)
                                        <img src="{{ Storage::url($usado->foto) }}" class="obj-fit-cover">
                                    @else
                                        <img src="/imagenes/default.png" class="obj-fit-cover">
                                    @endif
                                </div>
                            </td>
                            <td>{{ $usado->interno }} | {{ $usado->dominio }}</td>
                            <td id="usado-int" class="d-none">{{ $usado->interno }}</td>
                            <td id="usado-dom" class="d-none">{{ $usado->dominio }}</td>
                            <td class="td-marca-mod-ver">
                                {{ $usado->marca }} - <span class="text-dark"> <b>{{ $usado->modelo }}</b> </span>
                                <p class="text-muted mb-0">
                                    <span class="mr-2"><b>Año:</b> {{$usado->anio}}</span>
                                    <span class="mr-2"><b>KM:</b> {{  number_format((int)$usado->km, 0, ',', '.')}}</span>
                                    <span><b>Color:</b> {{$usado->color}}</span>
                                </p>
                            </td>
                            <td class="text-right">
                                @if($usado->uct)
                                    <img src="{{asset('imagenes/icons/uct-circle.png')}}" width="30px">
                                @endif
                            </td>
                            <td class="text-right"><b>$ {{  number_format($usado->precio, 2, ',', '.')}}</b></td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="{{$usado->id}}" @if($usado->visible == 1) checked @endif onclick="actualizarVisible(this);">
                                  <label class="custom-control-label" for="{{$usado->id}}"></label>
                                </div>
                            </td>
                            <td class="text-right">
                                <form method="POST" action="{{ route('usados.destroy', $usado->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                      <a href="{{ route('usados.edit', $usado->id) }}" class="btn btn-secondary btn-sm_"><i class="far fa-edit"></i></a>
                                      <button onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-danger btn-sm_"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
        		</table>
            </div>

            <!-- MOBILE -->
            <div class="d-block d-md-none d-lg-none d-xl-none border-top mt-3">
                <ul class="list-group list-group-flush">
                    @foreach($usados as $usado)
                    <li class="list-group-item usado-row usado-row-{{$usado->interno}} usado-row-{{$usado->dominio}} @if($usado->estado == 'RESERVADO') list-group-item-danger @endif" 
                        id="usado-row-{{$usado->interno}}">
                        <div class="d-flex w-100">
                            <div class="w-100">
                            <a href="{{ route('usados.edit', $usado->id) }}" class="precio">
                                <div class="row">
                                    <div class="col-7">
                                        <p class="mb-0"> 
                                            @if($usado->uct)
                                                <img src="{{asset('imagenes/icons/uct-circle.png')}}" width="19px">
                                            @endif
                                            {{$usado->marca}}
                                        </p>
                                    </div>
                                    <div class="col-5 text-right">
                                        <p class="mb-0 font-weight-bold">$ {{  number_format($usado->precio, 0, ',', '.')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0">{{$usado->modelo}}</p>
                                        <p class="mb-0"><spam class="font-weight-bold">{{$usado->dominio}}</spam> | {{$usado->anio}} | {{$usado->km}} km.</p>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
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
            target_id_filtrar_por = '#usado-dom';
            valor_a_buscar = document.getElementById("nro-dom").value;
            document.getElementById("nro-int").value = '';
        }
        if(e.target.id == 'nro-int'){
            target_id_filtrar_por = '#usado-int';
            valor_a_buscar = document.getElementById("nro-int").value;
            document.getElementById("nro-dom").value = '';
        }

        $('.usado-row').hide();
        $('#tbody-usados tr').each(function(){
        //$('#ul-usados li').each(function(){
            var value = $(this).find(target_id_filtrar_por).html();
            valor_a_buscar = valor_a_buscar.toString().toUpperCase();

            if (target_id_filtrar_por == '#usado-dom'){
                if(value.includes(valor_a_buscar)){
                    $('.usado-row-'+value).show();
                    return;
                };
            }

            if (value != valor_a_buscar){
               $('.usado-row-'+value).hide();
            } else{
               $('.usado-row-'+value).show();
           }

        });

        if (valor_a_buscar == '') {
            $('.usado-row').show();
        }

    }

    function limpiar()
    {
        interno = '';
        document.getElementById("nro-int").value = '';
        document.getElementById("nro-dom").value = '';
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