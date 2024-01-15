
<ul class="list-wrap">
    @foreach($categories as $category)
        <li>
            {{ $category->name }}
            @if(count($category->children))
                @include('partials.categories', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>
