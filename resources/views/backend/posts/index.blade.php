@extends('backend.layout')

@section('content')
<style type="text/css">
    .table-posts tbody{
        font-size: 15px;
    }
</style>
<div class="card" id="app_index">
    <div class="card-header">
        <strong class="card-title">Posts y Publicaciones</strong>
    </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Nuevo</a>
          </div>
        </div>
        <table class="table table-sm table-hover table-posts">
            <thead>
              <tr class="d-flex">
                <th class="col-4">Título</th>
                <th class="col-2">Tema</th>
                <th class="col-5">Contenido</th>
                <th class="col-1"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr class="d-flex">
                    <td class="col-4">{{ $post->titulo }}</td>
                    <td class="col-2">{{ $post->tema->tema }}</td>
                    <td class="col-5">{{str_limit(strip_tags($post->contenido), 60, '...')}}</td>
                    <td class="col-1">
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              <button onclick="return confirm('Desea eliminar el post')" type="submit" class="btn btn-outline-danger delete-user btn-sm"><i class="fa fa-trash"></i></button>
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