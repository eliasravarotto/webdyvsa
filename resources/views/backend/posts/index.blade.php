@extends('backend.layout')

@section('content')

    <div class="row">
        <div class="col col-md-8">
            <div class="card border-info" id="app_index">
                <div class="card-header bg-default font-weight-bold">
                    POSTS
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
                        <a class="btn btn-default" href="{{ route('posts.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
                      </div>
                    </div>
                    <table class="table table-sm table-hover table-posts">
                        <tbody>
                            @foreach($posts as $post)
                            <tr class="">
                                <td class="">
                                    <span class="text-muted">{{ $post->created_at->format('d M Y') }}</span><br>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="text-dark" title="Ver"><b>{{ $post->titulo }}</b></a> <br>
                                    @foreach($post->categories as $category)
                                    <a href="{{ route('posts.index') }}?category={{$category->id}}"><span class="badge badge-light">{{ $category->name }}</span></a>
                                    @endforeach
                                </td>
                                <td class="text-right">
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
        </div>
        <div class="col col-md-4">
            <category-component />
        </div>
    </div>
@stop

@section('script')
@stop