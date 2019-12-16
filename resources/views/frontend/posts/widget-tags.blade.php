<div class="widget tags-box">
    <h3 class="sidebar-title">Tags</h3>
    <div class="s-border"></div>
    <ul class="tags">
        @foreach(\App\Helpers\Helper::getPostsTemas() as $tema)
        <li><a href="#">{{ $tema->tema }}</a></li>
        @endforeach
    </ul>
</div>