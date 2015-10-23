<?php
/**
 * Created by PhpStorm.
 * User: Jhoseph Arango
 * Date: 23/10/2015
 * Time: 18:34
 */
include("Conexion.php");
session_start();
if(isset($_POST["titulo"]) && !empty($_POST["titulo"]) &&
    isset($_POST["anuncio"]) && !empty(["anuncio"]) &&
    isset($_SESSION["username"]) && !empty($_SESSION["username"])){

    $con = mysql_connect($HOST,$USER,$PW) or die("No conectado");
    mysql_select_db($DB,$con)or die("Error en base de datos");

    mysql_query("INSERT INTO tbanuncio (titulo, anuncio,autor) VALUES ('$_POST[titulo]','$_POST[anuncio]','$_SESSION[username]')",$con)
    or die ("no funciona la sentencia sql " . mysql_error());

    header("Location:/LoginPHP/PanelControl.php");

}else{
    $error = true;
    header("Location:/LoginPHP/PanelControl.php?error=".$error);
}

