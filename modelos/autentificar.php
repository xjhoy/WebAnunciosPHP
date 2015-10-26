<?php
/**
 * Created by PhpStorm.
 * User: Jhoseph Arango
 * Date: 22/10/2015
 * Time: 21:24
 */
include("Conexion.php");

session_start();
if(isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["pw"]) && !empty($_POST["pw"])){

    $conn = new PDO("mysql:host=$HOST;dbname=$DB",$USER,$PW);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM tbcrud WHERE email ='$_POST[email]'";

    $datos = $conn->query($sql);

    foreach($datos as $row){}

    //$session = mysql_fetch_array($rs);
    if(($_POST["email"] == $row["email"]) && ($_POST["pw"] == $row["pw"])){
        $_SESSION["username"] = $row["id"];
        header("Location:../PanelControl.php?name=".$row["nombre"]);
    }else{
        $error = true;
        header("Location:/LoginPHP/index.php?error=".$error);
    }
}else{
    echo "debes llenar ambos campos";
}
