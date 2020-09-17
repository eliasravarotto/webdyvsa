<div class="widget tags-box">
    <h3 class="sidebar-title">Categorías</h3>
    <div class="s-border"></div>
    <ul class="tags">
        @foreach(\App\Helpers\Helper::getCategories() as $c)
        <li><a href="#">{{ $c->name }}</a></li>
        @endforeach
    </ul>
</div>