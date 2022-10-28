
@foreach ($categories as $category)
    <li class="nav-item">
<a class="nav-link" href="{{route('category', $category->slug)}}">{{$category->title}}</a>
    </li>
@endforeach
