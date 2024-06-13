<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <h2>Formulario PHP</h2>
    <form action="procesar_formulario.php" method="post">
        <label for="opcion">Selecciona una opción:</label><br>
        <select name="opcion" id="opcion">
            <option value="saludo">Saludo</option>
            <option value="despedida">Despedida</option>
        </select><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
