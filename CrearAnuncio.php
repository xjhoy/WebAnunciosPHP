<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Anuncio</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="contenedor">
        <form action="modelos/CrearAnuncio.php" method="post" class="formulario">
            <div class="input-group">
                <label for="tituloAnuncio">Titulo del anuncio</label>
                <input type="text" name="titulo" id="tituloAnuncio">
            </div>
            <div class="input-group">
                <label for="txtAnuncio">Escribe aqui tu anuncio</label>
                <textarea name="anuncio" id="txtAnuncio" cols="30" rows="10"></textarea>
            </div>
            <div class="input-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>