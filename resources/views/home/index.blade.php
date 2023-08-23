<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Book Wander</title>
</head>

<body>
    <h1>HOME</h1>

    @auth
    <p>Bienvenido {{auth()->user()->first_name }}</p>
    <p>
        <a href="/logout">Cerrar sesion</a>
    </p>
    @endauth

    @guest
    <p>Para ver el contenido <a href="/login">Iniciar sesion</a></p>
    @endguest
</body>

</html>
