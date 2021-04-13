@extends('backend.layout')

@section('content')

    <div class="row">
        <div class="col col-md-8">
            <div class="card border-info" id="app_index">
                <div class="card-body">
                    <div class="card-panel mb-4">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-header bg-warning"><i class="far fa-newspaper"></i></div>
                                    <div class="d-block">
                                            <h5 class="card-title mb-0">ENTRADAS</h5>
                                        <small class="text-muted">{{ $posts->count() }} posts en total</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 text-right">
                                <a href="{{ route('posts.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group list-group-flush ul-posts">
                                @forelse($posts as $post)
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-3 col-md-2">
                                                @if($post->image)
                                                    <img class="img-post" src="{{$post->image->public_path}}" class="img-fluid">
                                                @else
                                                    <img class="img-post" src="/imagenes/default.png" class="img-fluid">
                                                @endif
                                            </div>
                                            <div class="col-9 col-md-8">
                                                <p class="mb-1">{{ $post->titulo }}</p>
                                                <small><b>{{ $post->created_at->format('d M Y') }}</b> | </small>
                                                @foreach($post->categories as $category)
                                                    <span class="badge badge-default">{{ $category->name }}</span>
                                                @endforeach
                                            </div>
                                            <div class="col-12 col-md-2 d-flex  justify-content-end">
                                                <div>
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm"> <i class="fas fa-pencil"></i> </a>
                                                </div>
                                                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                      <button onclick="return confirm('Desea eliminar el post')" type="submit" class="btn text-danger btn-sm ml-2"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
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