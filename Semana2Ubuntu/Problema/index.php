<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área del Triángulo</title>
</head>
<body>
    <h2>Área del Triángulo</h2>
    <form action="index.php" method="post">
        <label for="base">Base:</label><br>
        <input type="number" id="base" name="base" required><br>
        <label for="altura">Altura:</label><br>
        <input type="number" id="altura" name="altura" required><br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;
        echo "<p>El área del triángulo con base $base y altura $altura es: $area</p>";
    }
    ?>
</body>
</html>

