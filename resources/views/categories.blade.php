

@foreach ((new App\Models\Categories())->getCategoriesId() as $category )
<a href="{{route('categories', $category['slug'])}}">{{$category['title']}}</a>
@endforeach
