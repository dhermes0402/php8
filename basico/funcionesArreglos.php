<?php

    $numeros = [1, 2, 3, 4, 5];
    // Contar elementos de un array
    echo "<h4>Contar elementos de un arreglo</h4>";
    echo count($numeros);
    echo "<hr>";

    // Como agregar al final de un array
    array_push($numeros, 7);
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    // Como agregar al inicio del array
    echo "<hr>";
    array_unshift($numeros, 100);
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    // Eliminar al final de un array
    echo "<hr>";
    $elimino = array_pop($numeros);
    echo "El número que he eliminado del array es: " . $elimino;
    echo "<br>";
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    // Eliminar al inicio de un array
    echo "<hr>";
    $eliminoInicio = array_shift($numeros);
    echo "El número que he eliminado del array es: " . $eliminoInicio;
    echo "<br>";
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    // Verificar si existe un valor
    echo "<hr>";
    $personas = [
        "nombre" => "diego",
        "curso" => "php8"
    ];

    if (in_array("diego", $personas)) {
        echo "El nombre que buscas se encuentra en el array";
    } else {
        echo "El nombre no se encuentra disponible";
    }

    // Funciones de ordenamiento
    echo "<hr>";
    // Orden ascendente
    sort($numeros);
    var_dump($numeros);

    echo "<hr>";
    // Orden descendente
    rsort($numeros);
    print_r($numeros);

    echo "<hr>";
    // Combinar arreglos
    $a = [1, 2, 3];
    $b = [4, 5, 6];

    $c = array_merge($a, $b);
    print_r($c);

    echo "<hr>";
    // Como buscar en un arreglo, te devuelve el índice
    $posicion = array_search(6, $b);
    echo $posicion;
    // Te devuelve el número
    echo "<hr>";
    echo $b[$posicion];

?>