

<!--
    <a class="nav-link {{ request()->routeIs('admin.index')?' active':'' }}"
       href="{{ route('admin.index') }}">Админка</a>
-->


@foreach ((new App\Models\Categories())->getCategories() as $category )
    <li class="nav-item">
<a class="nav-link" href="{{route('categories', $category['slug'])}}">{{$category['title']}}</a>
    </li>
@endforeach
