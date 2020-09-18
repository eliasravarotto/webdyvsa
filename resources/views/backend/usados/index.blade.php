@extends('backend.layout')

@section('content')
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
    @media (max-width: 576px) {
        #app_index {
            margin-right: -20px;
        }
    }
</style>
    <div class="card border-info" id="app_index">
        <div class="card-header bg-default font-weight-bold">
            USADOS
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-12 d-flex justify-content-end my-1" style="margin-bottom: 10px;">
                <a class="btn btn-default" href="{{ route('usados.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
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
              <button type="submit" class="btn btn-default mb-2 w-100" onclick="limpiar()">Limpiar</button>
              </div>
            </div>

            <!-- WEB -->
            <div class="d-none d-md-block d-lg-block d-xl-block">
            <table class="table table-sm">
                <thead style="background-color: rgba(0, 0, 0, 0.075);">
                  <tr class="bg-danger text-light">
                    <th></th>
                    <th>Int.</th>
                    <th>Dominio</th>
                    <th>Detalles</th>
                    <th></th>
                    <th></th>
                    <th>Disp.</th>
                    <th>Visible</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tbody-usados">
                    @foreach($usados as $usado)
                    <tr class="usado-row usado-row-{{$usado->interno}} usado-row-{{$usado->dominio}}" id="usado-row-{{$usado->interno}}">
                        <td><img src="{{ Storage::url($usado->foto) }}" style="max-height: 34px; max-width: 45px;"></td>
                        <td id="usado-int">{{ $usado->interno }}</td>
                        <td id="usado-dom">{{ $usado->dominio }}</td>
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
                        <td class="mx-3">@if($usado->estado == "DISPONIBLE") <i class="fa fa-check text-success" aria-hidden="true"></i>@else <i class="fa fa-minus-circle text-danger" aria-hidden="true"></i> @endif</td>
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
                                  <a href="{{ route('usados.edit', $usado->id) }}" class="btn btn-light"><i class="far fa-edit"></i></a>
                                  <button onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-outline-danger delete-user"><i class="fa fa-trash"></i></button>
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
                    <li class="list-group-item usado-row usado-row-{{$usado->interno}} usado-row-{{$usado->dominio}}" 
                        id="usado-row-{{$usado->interno}}">
                        <div class="d-flex w-100">
                            {{-- @if($usado->foto != null)
                            <img src="{{ Storage::url($usado->foto) }}" style="width: 60px">
                            @else
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2aR-2FHpyTZDEm14lQRd2wF2e6r8XgcKq-dluqRzuRztKplOw&s" style="width: 60px"> 
                            @endif --}}
                            <div class="w-100">
                            <a href="{{ route('usados.edit', $usado->id) }}" class="precio">
                                <div class="d-flex w-100">
                                    <h6 class="card-title" style="width: 65%"> 
                                        @if($usado->uct)
                                            <img src="{{asset('imagenes/icons/uct-circle.png')}}" width="19px">
                                        @endif
                                        {{$usado->marca}}
                                    </h6>
                                    <h6 class="card-title text-right" style="width: 35%">
                                            $ {{  number_format($usado->precio, 0, ',', '.')}} @if($usado->estado == "DISPONIBLE") <i class="fa fa-check text-success" aria-hidden="true"></i>@else <i class="fa fa-minus-circle text-danger" aria-hidden="true"></i> @endif
                                    </h6>
                                </div>
                                <h6 class="card-subtitle mb-2">
                                    <b>{{$usado->modelo}}</b>
                                </h6>
                                <h6 class="card-subtitle mt-1 text-muted">
                                    {{$usado->dominio}} - {{$usado->anio}} - {{$usado->km}} km.
                                </h6>
                            </a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
    	</div>
    </div>
{{--     <ul class="list-group list-group-flush d-md-none" id="ul-usados">
        @foreach($usados as $usado)
            <li class="list-group-item usado-row usado-row-{{$usado->interno}} usado-row-{{$usado->dominio}}" id="usado-row-{{$usado->interno}}">
                <div class="row">
                    <div class="col " id="usado-int">{{$usado->interno}}</div>
                    <div class="col " id="usado-dom">{{$usado->dominio}}</div>
                    <div class="col "><b>$ {{ $usado->precio }}</b></div>
                    <div class="col ">
                        <form method="POST" action="{{ route('usados.destroy', $usado->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              <a href="{{ route('usados.edit', $usado->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o d-none d-sm-none d-lg-block" aria-hidden="true"></i></a>
                              <button onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-outline-danger delete-user d-none d-sm-none d-lg-block" ><i class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </div>
                <span id="usado-int">{{$usado->interno}}</span> 
                <span id="usado-dom">{{$usado->dominio}}</span> 
            </li>
        @endforeach
    </ul> --}}
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