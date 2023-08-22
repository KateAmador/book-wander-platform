<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>

    <div class="background-image"></div>

    <div class="form-container">
        <div class="form-box">

            <form action="/register" method="POST">
                @csrf
                <h2>Registrarse</h2>
                <span class="line"></span>
                <p>Crea tu Cuenta</p>

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="first_name" placeholder="Nombre" id="name" class="form-control form-control-rounded custom-input">
                </div>

                <div class="form-group">
                    <label for="lastName">Apellido</label>
                    <input type="text" name="last_name" placeholder="Apellido" id="lastName" class="form-control form-control-rounded custom-input">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" id="email" class="form-control form-control-rounded custom-input">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" placeholder="Contraseña" id="password" class="form-control form-control-rounded custom-input">
                </div>

                <div class="form-group">
                    <label for="password">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" id="password" class="form-control form-control-rounded custom-input">
                </div>


                <button type="submit" class="btn btn-primary btn-rounded">Registrarse</button>

            </form>
        </div>
    </div>
</body>

</html>
