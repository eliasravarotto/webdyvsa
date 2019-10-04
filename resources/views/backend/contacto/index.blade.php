@extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">EMAILS</h4>
    <h6 class="card-subtitle mb-2 text-muted">Recibidos desde {{$from}}.</h6>    
    <table class="table table-sm table-hover table-responsive-xl">
        <thead>
          <tr>
            <th>Created_at</th>
            <th>Cliente</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($mensajes as $mensaje)
          <tr>
            <td>{{ date('d-m-Y', strtotime($mensaje->created_at))}}</td>
            <td>
              @if(strlen($mensaje->cliente) > 25)
                {{ substr($mensaje->cliente, 0, 25) . '...'}}
              @else
                {{$mensaje->cliente}}
              @endif
            </td>
            <td>
               @if(strlen($mensaje->email) > 25)
                {{ substr($mensaje->email, 0, 25) . '...'}}
              @else
                {{$mensaje->email}}
              @endif
            </td>
            <td>
              @if(strlen($mensaje->mensaje) > 35)
                {{ substr($mensaje->mensaje, 0, 35) . '...'}}
              @else
                {{$mensaje->mensaje}}
              @endif
            </td>
            <td><a href="{{route('contacto_mensajes_show', [$mensaje->from, $mensaje->id])}}" class="btn btn-default"><i class="fa fa-eye"></i></a></td>
            @endforeach
          </tr>
        </tbody>
    </table>
</div>
      

@stop