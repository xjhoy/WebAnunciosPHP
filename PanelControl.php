<!doctype html>
<html lang="es">
<head>
<!-- Panel de control del usuario -->
    <meta charset="UTF-8">
    <title>Panel de control</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
session_start();
?>
    <div class="contenedor">
        <div class="nav">
            <ul>
                <li><a href="MostrarAnuncios.php">Todos los anuncios</a></li>
                <li><a href="CrearAnuncio.php">Crear anuncio</a></li>
                <li><a href="MisAnuncios.php">Mis anuncios</a></li>
                <li><a href="modelos/Destruir.php">Cerrar Sesion</a></li>
            </ul>
        </div>
        <div class="wrap">
            <h1>
                <?php echo $_SESSION["username"]; ?>
            </h1>
        </div>
    </div>
</body>
</html>