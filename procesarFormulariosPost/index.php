<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Procesar formularios con Post</h1>
    <form action="recibir.php" method="post">
        <label for="">Escribe tu nombre</label>
        <br>
        <input type="text" name="nombre" required>
        <br>
        <label for="">Escribe tu materia</label>
        <br>
        <input type="text" name="materia" required>
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>