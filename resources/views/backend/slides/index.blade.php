@extends('backend.layout')

@section('content')
<style type="text/css">
    .table-posts tbody{
        font-size: 15px;
    }
</style>
<div class="card border-primary" id="app_index">
    <div class="card-header">
        <strong class="card-title">Slides</strong>
    </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('admin_slides.create') }}">Nuevo</a>
          </div>
        </div>
        <table class="table table-sm table-hover">
            <thead>
              <tr class="d-flex">
                <th class="col">#Id</th>
                <th class="col">Nombre</th>
                <th class="col">Items</th>
                <th class="col">Created_at</th>
                <th class="col">Updated_at</th>
                <th class="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($slides as $slide)
                <tr class="d-flex">
                    <td class="col">{{ $slide->id }}</td>
                    <td class="col">{{ $slide->nombre }}</td>
                    <td class="col">{{ sizeof($slide->items) }}</td>
                    <td class="col">{{ $slide->created_at->format('Y-m-d') }}</td>
                    <td class="col">{{ $slide->updated_at->format('Y-m-d') }}</td>
                    <td class="col">
                        <form method="POST" action="{{ route('admin_slides.destroy', $slide->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              <a href="{{ route('admin_slides.edit', $slide->id) }}" class="btn btn-outline-info btn-sm"><i class="far fa-edit"></i></a>
                              <button onclick="return confirm('Desea eliminar el slide')" type="submit" class="btn btn-outline-danger delete-user btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
		</table>
	</div>
</div>
@stop

@section('script')
@stop