<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
</head>

<body>
    <div class="background-image"></div>

    <div class="form-container">
        <div class="form-box">

            <form action="/login" method="POST">
                @csrf
                <h2>Login</h2>
                <span class="line"></span>
                <p>Ingresa a tu Cuenta</p>

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
                <p>¿No tienes una cuenta? <a href="/bookWander/app/views/user/register.php">Regístrate aquí</a></p>
            </form>


        </div>
    </div>
</body>

</html>
