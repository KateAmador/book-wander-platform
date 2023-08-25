<link href="{{ url('assets/css/navbar.css') }}" rel="stylesheet">
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ url('assets/img/logo.png') }}" alt="Logo">
        </div>
        <ul class="links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Libros</a></li>
            @guest
            <li><a href="#">Acerca de Nosotros</a></li>
            <li><a href="#">Contacto</a></li>
            @endguest
            @auth
            <li><a href="#">Solicitudes</a></li>
            <li><a href="#">Mensajes</a></li>
            @endauth
        </ul>
        @guest
        <a href="/login" class="action_btn">Acceder</a>
        <div class="toggle_btn">
            <i class="bi bi-list"></i>
        </div>
        @endguest

        @auth
        <div class="dropdown">
            <button class="btn dropdown-toggle btn-profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->first_name }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
            </ul>
        </div>
        @endauth

    </nav>

    <div class="dropdown_menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Libros</a></li>
        <li><a href="#">Acerca de Nosotros</a></li>
        <li><a href="#">Contacto</a></li>
        @auth
        <li><a href="#">Solicitudes</a></li>
        <li><a href="#">Mensajes</a></li>
        @endauth
        <li><a href="#" class="action_btn">Acceder</a></li>
    </div>
</header>
<script src="{{ url('assets/js/navbar.js') }}"></script>
