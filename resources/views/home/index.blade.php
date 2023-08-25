@extends('layouts.app-master')

@section('content')

    <h1 class="container">HOME</h1>

    @auth
    <p>Bienvenido {{auth()->user()->first_name }}</p>
    <p>
        <a href="/logout">Cerrar sesion</a>
    </p>
    @endauth

    @guest
    <p>Para ver el contenido <a href="/login">Iniciar sesion</a></p>
    @endguest

@endsection
