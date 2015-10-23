<!doctype html>
<html lang="es">
<head>
    <!-- Pagina para ver todos los anuncios de todos los usuarios de la aplicación-->
    <meta charset="UTF-8">
    <title>Anuncios</title>
</head>
<body>
<div class="contenedor">

    <?php
    include("modelos/Conexion.php");
    session_start();
    $con = mysql_connect($HOST,$USER,$PW) or die("No conectado");
    mysql_select_db($DB,$con)or die("Error en base de datos");

    $rs = mysql_query("SELECT * FROM tbanuncio WHERE autor='$_SESSION[username]'",$con)
    or die ("no funciona la sentencia sql " . mysql_error());

    while($reg = mysql_fetch_array($rs)){
        echo '
        <div class="">
            <h2>'. $reg["titulo"] .'</h2>
            <p>'. $reg["anuncio"] .'</p>
        </div>
        ';
    }
    ?>

</div>
</body>
</html>