@extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">EMAILS</h4>
    <h6 class="card-subtitle mb-2 text-muted">Recibidos desde {{$from}}.</h6>    
    <table class="table table-sm table-hover table-responsive-xl">
        <thead>
          <tr class="d-flex">
            <th class="col-sm-3">Cliente</th>
            <th class="col-sm-2">Teléfono</th>
            {{-- <th>Email</th> --}}
            <th class="col-sm-5">Mensaje</th>
            {{-- <th>Enviado a</th> --}}
            <th class="col-sm-2">Created_at</th>
          </tr>
        </thead>
        <tbody>
          @foreach($mensajes as $mensaje)
          <tr class="d-flex">
            <td class="col-sm-3">{{$mensaje->cliente}}</td>
            <td class="col-sm-2">{{$mensaje->telefono}}</td>
            {{-- <td>{{$mensaje->email}}</td> --}}
            <td class="col-sm-5">{{$mensaje->mensaje}}</td>
            {{-- <td>{{$mensaje->enviar_a}}</td> --}}
            <td class="col-sm-2">{{ date('d-m-Y H:m', strtotime($mensaje->created_at))}}</td>
            @endforeach
          </tr>
        </tbody>
    </table>
  </div>
</div>
      

@stop