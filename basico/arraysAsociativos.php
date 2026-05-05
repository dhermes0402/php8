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
        "edad" => "25",
        "ciudad" => "Madrid"
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

    

?>