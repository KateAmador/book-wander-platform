@extends('layouts.auth-master')
<!-- <link rel="stylesheet" href="{{ url('assets/css/login.css') }}"> -->
@section('content')
<div class="background-image">
    <img src="{{ url('assets/img/login-bg.jpg') }}" alt="Fondo de Inicio de Sesión">
</div>


<div class="form-container">
    <div class="form-box">

        <form action="/login" method="POST">
            @csrf

            <h2>Login</h2>

            <span class="line"></span>
            <p>Ingresa a tu Cuenta</p>
            @include('layouts.partials.messages')
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" id="email" class="form-control form-control-rounded custom-input" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña" id="password" class="form-control form-control-rounded custom-input" required>
            </div>

            <button type="submit" class="btn btn-primary btn-rounded">Ingresar</button>
            <div class="separator"></div>
            <p>¿No tienes una cuenta? <a href="/register">Regístrate aquí</a></p>
        </form>


    </div>
</div>
@endsection
