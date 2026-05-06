<?php
    // Un array asociativo 
    /**
     * Utilizan claves o (keys),
     * estas son personalizadas 
     * en lugar de usar índices
     */

    // Es como un JSON
    // Declaración
    $persona = array(
        "nombre" => "juan",
        "edad" => 25,
        "ciudad" => "Madrid",
        "profesion" => "ing"
    );

    $productos = [
        "nombre" => "laptos",
        "precio" => 10000,
        "marca" => "Apple"
    ];

    // Acceso:
    echo $persona["nombre"];
    
    // Agregar elementos
    echo "<br>";
    $persona["profesion"] = "Ing";
    echo "<pre>";
    var_dump($persona);
    echo "</pre>";

    // RECORRER ASOCIATIVOS
    echo "<hr>";
    foreach ($persona as $key => $value) {
        echo "La llave es $key y el valor es $value";
        echo "<br>";
    }

    echo "<hr>";
    foreach ($persona as $key => $value) {
        if (is_int($value)) {
            echo "Si el valor es entero, el valor es: $value";
        }
    }

?>