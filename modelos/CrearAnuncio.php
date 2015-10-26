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

    try{

        $conn = new PDO("mysql:host=$HOST;dbname=$DB",$USER,$PW);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tbanuncio (titulo, anuncio,autor)
          VALUES ('$_POST[titulo]','$_POST[anuncio]','$_SESSION[username]')";

        $conn->exec($sql);
        header("Location:/LoginPHP/MisAnuncios.php");

    }catch (PDOException $e){
        $error = true;
        header("Location:/LoginPHP/CrearAnuncio.php?error=".$error);
    }

}else{
    $error = true;
    header("Location:/LoginPHP/PanelControl.php?error=".$error);
}

