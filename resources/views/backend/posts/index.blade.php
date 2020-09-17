@extends('backend.layout')

@section('content')
<style type="text/css">
    .table-posts tbody{
        font-size: 15px;
    }
</style>
<div class="card" id="app_index">
    <div class="card-header">
        <strong class="card-title">Posts</strong>
    </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Nuevo</a>
          </div>
        </div>
        <table class="table table-sm table-hover table-posts">
            <tbody>
                @foreach($posts as $post)
                <tr class="d-flex">
                    <td class="col-6">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-dark" title="Ver"><b>{{ $post->titulo }}</b></a> <br>
                        <span class="text-muted">{{ $post->created_at->format('d M Y') }}</span><br>
                        @foreach($post->categories as $category)
                        <a href="{{ route('posts.index') }}?category={{$category->id}}"><span class="badge badge-light">{{ $category->name }}</span></a>
                        @endforeach
                    </td>
                    <td class="col-5">{{str_limit(strip_tags($post->contenido), 120, '...')}}</td>
                    <td class="col-1 text-right">
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
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