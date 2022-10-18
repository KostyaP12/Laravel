
@extends('layouts.main')

@section('title', 'Добавить новость')

@section('menu')
@include('admin.menu')
@endsection

@section('content')
<div>
    <input type="text" id="title" name="title">
    <label for="username">title</label>
    <input type="text" id="text" name="text">
    <label for="username">text</label>
    <input type="text" id="short_text" name="short_text">
    <label for="username">Short text</label>
</div>
@endsection
