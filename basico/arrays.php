<?php
    // Arrays 
    /* Es una estructura de datos que permite almacenar
    multiples valores    
    */
    // Arreglos indexados
    $frutas = array("manzana" , "pera", "uva");
    // <pre> sirve para ordenador mejor los arrays
    echo "<pre>";
    var_dump($frutas);
    echo "</pre>";
    // Acceder por el índice
    echo "<hr>";
    echo "Accediendo mediante el índice: " . $frutas[0];

    // Otro ejemplo con sintaxis corta de array
    echo "<hr>";
    $colores = ["rojo", "negro", "blanco"];
    echo "<pre>";
    var_dump($colores);
    echo "</pre>";
    // Acceder por el índice
    echo "<hr>";
    echo "Accediendo mediante el índice: " . $colores[2];

    // Agregar un elemento al final del arreglo
    echo "<hr>";
    // Con esto agregamos cosas al array
    $colores[3] = "gris";
    $colores[10] = "púrpura";
    echo "<pre>";
    var_dump($colores);
    echo "</pre>";

    // Como recorrer arrays
    echo "<hr>";
    $coches = ["deportivo", "moto", "camión"];

    for ($i=0; $i < count($coches); $i++) { 
        echo "en el índice $i está " . $coches[$i];
        echo "<br>";
    }

    // Recorrer con foreach
    echo "<hr>";
    $numeros = [1, 5, 7, 2];

    foreach ($numeros as $numero) {
        echo $numero;
        echo "<br>";
    }

    echo "<hr>";
    foreach ($numeros as $key => $value) {
        echo "La llave o índice es $key y el valor es $value";
        echo "<br>";
    }




?>