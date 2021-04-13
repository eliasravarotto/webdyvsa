@extends('backend.layout')

@section('content')
<style type="text/css">
    .table-posts tbody{
        font-size: 15px;
    }
</style>
<div class="card border-info" id="app_index">
    <div class="card-body">
        <div class="card-panel">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-header bg-warning"><i class="fas fa-image"></i></div>
                        <div class="d-block">
                            <h5 class="card-title mb-0">SLIDERS</h5>
                            <small class="text-muted">{{ $slides->count() }} sliders en total.</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 text-right">
                    <a href="{{ route('admin_slides.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
                </div>
            </div>
        </div>
        <table class="table table-sm table-hover">
            <thead class="thead-light">
              <tr class="">
                <th>#Id</th>
                <th>Nombre</th>
                <th>Items</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($slides as $slide)
                <tr>
                    <td>{{ $slide->id }}</td>
                    <td>{{ $slide->nombre }}</td>
                    <td>{{ sizeof($slide->items) }}</td>
                    <td>{{ $slide->created_at->format('Y-m-d') }}</td>
                    <td>{{ $slide->updated_at->format('Y-m-d') }}</td>
                    <td class="text-right">
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