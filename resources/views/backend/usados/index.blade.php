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
</style>
    <div class="row">
      <div class="col-md-12 d-flex justify-content-end" style="margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('usados.create') }}">Nuevo</a>
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

            <div class="d-none d-md-block d-lg-block d-xl-block">
            <table class="table table-sm table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th>Int.</th>
                    <th>Dominio</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año - Color</th>
                    <th>Precio</th>
                    <th>Disp.</th>
                    <th>Visible</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tbody-usados">
                    @foreach($usados as $usado)
                    <tr class="usado-row usado-row-{{$usado->interno}} usado-row-{{$usado->dominio}}" id="usado-row-{{$usado->interno}}">
                        <td><img src="{{ $usado->foto }}" style="height: 34px"></td>
                        <td id="usado-int">{{ $usado->interno }}</td>
                        <td id="usado-dom">{{ $usado->dominio }}</td>
                        <td>{{ $usado->marca }}</td>
                        <td>{{str_limit(strip_tags($usado->modelo), 12, '...')}}</td>
                        <td>{{ $usado->anio }} - {{$usado->color}}</td>
                        <td><b>$ {{  number_format($usado->precio, 2, ',', '.')}}</b></td>
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
                                  <a href="{{ route('usados.edit', $usado->id) }}" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                                  <button onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-outline-danger delete-user"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    		</table>
            </div>
            <div class="d-block d-md-none d-lg-none d-xl-none">
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
                                <div class="d-flex w-100">
                                    <h6 class="card-title" style="width: 65%">{{$usado->marca}}</h6>
                                    <h6 class="card-title text-right" style="width: 35%">
                                        <a href="{{ route('usados.edit', $usado->id) }}" class="precio">
                                            $ {{  number_format($usado->precio, 0, ',', '.')}}
                                        </a>
                                    </h6>
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    {{$usado->modelo}}
                                </h6>
                                <h6 class="card-subtitle mt-1 text-muted">
                                    {{$usado->dominio}} - {{$usado->anio}} - {{$usado->km}} km.
                                </h6>
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