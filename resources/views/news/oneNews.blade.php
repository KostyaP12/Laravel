
@extends('layouts.main')

@section('title', 'Новости')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div>
        <h2>{{$oneNews['title']}}</h2>
        <p>{{$oneNews['text']}}</p>
    </div>
@endsection


