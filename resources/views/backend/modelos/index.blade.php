@extends('backend.sufee_admin.index')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/admin">Dashboard</a></li>
                    <li class="active">Modelos</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <strong class="card-title" v-if="headerText">Listado de Modelos</strong>
    </div>

    <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('modelos.create') }}">Nuevo</a>
          </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Activo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($modelos as $modelo)
              <tr>
                <td>{{$modelo->id}}</td>
                <td>{{$modelo->nombre}}</td>
                <td>{{$modelo->marca_id}}</td>
                <td>{{$modelo->activo}}</td>
                <td>
                  {{-- <a href="{{ route('modelos.show', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                  <form action="{{ url('admin/modelos', ['id' => $modelo->id]) }}" method="post">
                      <a href="{{ route('modelos.edit', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      {!! method_field('delete') !!}
                      {!! csrf_field() !!}
                      <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
</div>

       

@stop