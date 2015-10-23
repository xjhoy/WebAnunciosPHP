<?php
/**
 * Created by PhpStorm.
 * User: Jhoseph Arango
 * Date: 22/10/2015
 * Time: 21:24
 */
include("Conexion.php");
session_start();
if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
    isset($_POST["pw"]) && !empty($_POST["pw"])){

    $con = mysql_connect($HOST,$USER,$PW) or die("Error conectar");
    mysql_select_db($DB,$con) or die("Error al conectar a la base de datos");

    $rs = mysql_query("SELECT * FROM tbcrud WHERE nombre ='$_POST[nombre]'",$con);

    $session = mysql_fetch_array($rs);

    if(($_POST["nombre"] == $session["nombre"]) && ($_POST["pw"] == $session["pw"])){
        $_SESSION["username"] = $_POST["nombre"];
        header("Location:/LoginPHP/PanelControl.php");
    }else{
        $error = true;
        header("Location:/LoginPHP/index.php?error=".$error);
    }
}else{
    echo "debes llenar ambos campos";
}
