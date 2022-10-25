@extends('layouts.main')

@section('title', 'Новости')


@section('menu')
    @include('menu')
@endsection

@section('categories')
    @include('categories')
@endsection

@section('content')
@foreach ($allNews as $news)
<a href="{{route('oneNews', $news['id'])}}">{{$news["title"]}}</a>
<div>{{$news['text']}}</div>
<br>
@endforeach
@endsection




