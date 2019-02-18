@extends('backend.layout')

@section('content')
       
      
    <table class="table table-sm">
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
            <td>{{$mensaje->created_at}}</td>
            @endforeach
          </tr>
        </tbody>
      </table>

@stop