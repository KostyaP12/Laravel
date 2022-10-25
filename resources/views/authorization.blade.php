@extends('layouts.app')

@section('title', 'Авторизация')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div>
        <input type="text" id="username" name="username">
        <label for="username">Nickname</label>
        <input type="password" id="pwd" name="pwd">
        <label for="pwd">Password</label>
        <input type="checkbox" id="remember" name="remember" value="remember">
        <label for="remember">Запомнить</label>
        <input type="button" id="send" name="send" value="send">
    </div>
@endsection



