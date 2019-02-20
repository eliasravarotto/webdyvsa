@extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">EMAILS</h4>
    <h6 class="card-subtitle mb-2 text-muted">Recibidos desde {{$from}}.</h6>    
    <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Teléfono</th>
            {{-- <th>Email</th> --}}
            <th>Mensaje</th>
            {{-- <th>Enviado a</th> --}}
            <th>Created_at</th>
          </tr>
        </thead>
        <tbody>
          @foreach($mensajes as $mensaje)
          <tr>
            <td>{{$mensaje->cliente}}</td>
            <td>{{$mensaje->telefono}}</td>
            {{-- <td>{{$mensaje->email}}</td> --}}
            <td>{{$mensaje->mensaje}}</td>
            {{-- <td>{{$mensaje->enviar_a}}</td> --}}
            <td>{{ date('d-m-Y H:m', strtotime($mensaje->created_at))}}</td>
            @endforeach
          </tr>
        </tbody>
    </table>
  </div>
</div>
      

@stop