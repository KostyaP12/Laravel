
@extends('layouts.main')

@section('title', 'Новости')

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if ($oneNews)
        @if (!$oneNews['isPrivate'])
    <div>
        <h2>{{$oneNews['title']}}</h2>
        <p>{{$oneNews['text']}}</p>
    </div>
        @else
            Зарегистрируйтесь для просмотра
        @endif
    @else
        Нет новости с таким id
    @endif
@endsection


