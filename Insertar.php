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
    <form action="modelos/CrearUsuario.php" method="post"  class="formulario">
        <h1 class="titulo">Nuevo Usuario</h1>
        <div class="input-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" required>
        </div>
        <div class="input-group">
            <label for="">Contraseña</label>
            <input type="password" name="pw" required>
        </div>
        <div class="input-group">
            <input type="submit" value="Enviar">
        </div>
    </form>
</div>
</body>
</html>