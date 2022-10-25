@extends('layouts.app')

@section('title', 'Новости')


@section('menu')
    @include('menu')
@endsection

@section('categories')
    @include('categories')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Новости</h1>
                        @forelse($allNews as $news)
                            <h2>{{ $news['title'] }}</h2>
                            @if (!$news['isPrivate'])
                                <a href="{{ route('oneNews', $news['id']) }}">Подробнее...</a><br>
                            @endif
                        @empty
                            Нет новостей
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




