<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>Login PHP</title>
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>

    <div class="contenedor">
        <div class="nav">
            <ul>
                <li>Anuncios hechos en php</li>
                <li><a href="Insertar.php">Registrar usuario</a></li>
            </ul>
        </div>
        <form action="modelos/autentificar.php" method="post" name="form" class="formulario-login">
            <h1 class="titulo">Iniciar Sesión</h1>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="pw">Password</label>
                <input type="password" id="pw" name="pw" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Entrar">
            </div>
        </form>
        <div class="error">
            <div class="alerta">
                <p>Error al iniciar session, compruebe el usuario y la contraseña</p>
            </div>
        </div>
    </div>
</body>
</html>