<?php
/**
 * Created by PhpStorm.
 * User: Jhoseph Arango
 * Date: 23/10/2015
 * Time: 17:03
 */
include("Conexion.php");
session_start();
if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
isset($_POST["pw"]) && !empty(["nombre"])){

    $con = mysql_connect($HOST,$USER,$PW) or die("No conectado");
    mysql_select_db($DB,$con)or die("Error en base de datos");

    mysql_query("INSERT INTO tbcrud (nombre, pw) VALUES ('$_POST[nombre]','$_POST[pw]')",$con)
        or die ("no funciona la sentencia sql " . mysql_error());

    $_SESSION["username"] = $_POST["nombre"];

    header("Location:/LoginPHP/PanelControl.php");

}else{
    header("Location:/LoginPHP/index.php");
}
