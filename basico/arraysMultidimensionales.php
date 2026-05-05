<?php
    // Arreglo multidimensional
    // Es un arreglo que contiene otros arreglos como elementos

    #arreglo bidimencional. Es como una matriz
    $estudiantes = [
        ["juan", 20, "ingeniero"],
        ["maría", 24, "médico"]
    ];

    echo $estudiantes[0][0]; // Juan
    echo "<br>";
    echo $estudiantes[1][2]; // Profesión

    // Arreglo multidimensional asociativo
    echo "<br>";
    $productos = [
        "laptop" => [
            "marca" => "hp",
            "precio" => 1000,
            "stock" => 5
        ],
        "mouse" => [
            "marca" => "logitec",
            "precio" => 900,
            "stock" => 10
        ],
    ];

    // Adquirir el precio de la laptop
    echo "El precio de la laptos es: ";
    echo $productos["laptop"]["precio"];

?>