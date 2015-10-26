<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo usuario</title>
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="contenedor">
    <form action="modelos/CrearUsuario.php" method="post"  class="formulario-crear">
        <h1 class="titulo">Nuevo Usuario</h1>
        <div class="contenedor-tabla">
            <div class="contenedor-fila">
                <div class="contenedor-columna">
                    <div class="input-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" required>
                    </div>
                    <div class="input-group">
                        <label for="">Correo electronico</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="">Provincia</label>
                        <input type="text" name="provincia" required>
                    </div>
                    <div class="input-group">
                        <label for="">Localidad</label>
                        <input type="text" name="localidad" required>
                    </div>
                </div>
                <div class="contenedor-columna">
                    <div class="input-group">
                        <label for="">Dirección</label>
                        <input type="text" name="direccion" required>
                    </div>
                    <div class="input-group">
                        <label for="">Telefono</label>
                        <input type="text" name="telefono" required>
                    </div>
                    <div class="input-group">
                        <label for="">Contraseña</label>
                        <input type="password" name="pw" required>
                    </div>
                    <div class="input-group">
                        <label for="">Repetir contraseña</label>
                        <input type="password" name="pw2" required>
                    </div>
                    <div class="input-group">
                        <input type="submit" value="Crear">
                    </div>

                </div>
            </div>
        </div>

    </form>
</div>
</body>
</html>