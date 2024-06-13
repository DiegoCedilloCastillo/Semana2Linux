<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST['opcion'];
    if ($opcion == "saludo") {
        echo "¡Hola! ¿Cómo estás?";
    } elseif ($opcion == "despedida") {
        echo "¡Hasta luego! Que tengas un buen día.";
    } else {
        echo "Opción no válida.";
    }
}
?>
