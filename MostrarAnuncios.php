<!doctype html>
<html lang="es">
<head>
<!-- Pagina para ver todos los anuncios de todos los usuarios de la aplicación-->
    <meta charset="UTF-8">
    <title>Anuncios</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="contenedor">
<div class="wrap">
    <div class="contenedor-info">
        <h1>Todos los anuncios</h1>
        <?php
        include("modelos/Conexion.php");

        session_start();
        $conn = new PDO("mysql:host=$HOST;dbname=$DB",$USER,$PW);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM tbanuncio";
        $datos = $conn->query($sql);
        foreach($datos as $row): ?>

            <ul class="dato">
                <li><?php echo $row["titulo"]; ?></li>
                <li><?php echo $row["anuncio"]; ?></li>
            </ul>

        <?php endforeach; ?>

    </div>

</div>
</div>
</body>
</html>