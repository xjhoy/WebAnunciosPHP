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

    try{
        $conn = new PDO("mysql:host=$HOST;dbname=$DB",$USER,$PW);
        // establecer el modo de excepcion del error PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO tbcrud (nombre, pw, email,provincia,localidad,direccion,telefono)
            VALUES ('$_POST[nombre]','$_POST[pw]','$_POST[email]','$_POST[provincia]','$_POST[localidad]'
            ,'$_POST[direccion]','$_POST[telefono]')";

        $conn->exec($sql);
        header("Location:/LoginPHP/PanelControl.php");
    }catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    }else{
        header("Location:/LoginPHP/index.php");
    }