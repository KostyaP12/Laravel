@extends('layouts.app')

@section('title', 'Новости')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (!$oneNews['isPrivate'])
                            <h2>{{$oneNews['title']}}</h2>
                            <p>{{$oneNews['text']}}</p>
                        @else
                            Новость приватная. Зарегистрируйтесь для просмотра ..
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


