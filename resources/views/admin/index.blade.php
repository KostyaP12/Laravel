

@extends('layouts.main')

@section('title', 'Админка')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div>
        Добро пожаловать Администратор!
    </div>
@endsection
