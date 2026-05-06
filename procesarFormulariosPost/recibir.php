<?php
    var_dump($_POST);
    echo "<hr>";
    echo $materia = $_POST["materia"];
    if ($materia === "web") {
        echo "<br>";
        echo "Felicidades por estudiar";
    }

    echo "<hr>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Procesado con éxito";
    } else {
        echo "El formulario no se proceso";
    }