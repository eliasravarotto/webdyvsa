<div class="widget recent-posts">
    <h3 class="sidebar-title">Recent Posts</h3>
    @foreach(\App\Helpers\Helper::getPostsWidgetRigth( $postInView,  5 ) as $post)
        <div class="media mb-2">
            <a class="pr-3" href="{{ route('show_post', $post->slug) }}">
                <img class="media-object" src="{{ $post->imagen_portada }}" alt="img no aviable">
            </a>
            <div class="media-body align-self-center">
                <h5 class="mt-0">
                    <a href="{{ route('show_post', $post->slug) }}" title="{{ $post->titulo }}">{{ $post->titulo }}</a>
                </h5>
                <div class="listing-post-meta">
                    {{$post->tema->tema}} | <a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->format('M d, Y') }}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>