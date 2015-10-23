<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION["username"])){
}else{
   header("Location:/LoginPHP/index.php");
}
?>
<div class="contenedor">
    <h1><?php echo $_SESSION["username"]?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur
        cumque dignissimos dolorem ducimus error et, facilis labore nihil similique!
        Commodi culpa dignissimos dolor fugiat fugit quia rem sed soluta unde?</p>
</div>
</body>
</html>
