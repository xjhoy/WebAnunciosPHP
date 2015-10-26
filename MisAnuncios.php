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
    <div class="contenedor-info">

        <?php
        include("modelos/Conexion.php");
        session_start();
        $conn = new PDO("mysql:host=$HOST;dbname=$DB",$USER,$PW);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM tbanuncio WHERE autor='$_SESSION[username]'";
        $datos = $conn->query($sql);
        foreach($datos as $row):
        ?>

        <?php endforeach?>

    </div>

</div>
</body>
</html>