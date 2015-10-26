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
include("modelos/Conexion.php");
$gId = $_SESSION["username"];
?>
    <div class="contenedor">
        <div class="nav">
            <ul>
                <li><a href="MostrarAnuncios.php">Todos los anuncios</a></li>
                <li><a href="CrearAnuncio.php">Crear anuncio</a></li>
                <li><a href="MisAnuncios.php?id=">Mis anuncios</a></li>
                <li><a href="modelos/Destruir.php">Cerrar Sesion</a></li>
            </ul>
        </div>

        <div class="wrap">
            <div class="contenedor-info">
                <h1>
                    <?php echo $_GET["name"]; ?>
                </h1>

            <?php
                try{

                    $conn = new PDO("mysql:host=$HOST;dbname=$DB",$USER,$PW);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sql = "SELECT * FROM tbcrud WHERE id='$_SESSION[username]'";

                    $datos = $conn->query($sql);
                    foreach($datos as $row){
                        echo '
                        <div class="dato"><h3>Correo electronico</h3>'.$row["email"].'</div>
                        <div class="dato"><h3>Provincia</h3>'.$row["provincia"].'</div>
                        <div class="dato"><h3>Localidad</h3>'.$row["localidad"].'</div>
                        <div class="dato"><h3>Direccion</h3>'.$row["direccion"].'</div>
                        <div class="dato"><h3>Telefono</h3>'.$row["telefono"].'</div>
                    ';

                    }

                }catch (PDOException $e){
                    echo $e->getMessage();
                }
             ?>

            </div>
        </div>
    </div>
</body>
</html>