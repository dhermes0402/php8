<?php
    echo "Hola";

    echo "<br>";
    echo "<hr>";

    $x = 10;
    $y = "10";

    var_dump($x == $y);
    echo "<hr>";
    print(true && true);
    echo "<hr>";
    var_dump(true && true);

    // Verificar si una variable esta definida y no está vacía
    echo "<hr>";
    $texto = "Hola";
    if(isset($texto) && !empty($texto)){
        echo "Texto válido";
    }

    echo "<hr>";
    // Verificar si una persona tiene acceso
    $estaRegistrado = true;
    if($estaRegistrado){
        echo "Acceso concedido al sistema ";
    }

    // Else if
    // Switch
    // While
    /*echo "<hr>";
    while (true) {
        echo "Hola";
    }*/

    // Contar números
    echo "<hr>";
    $numero = 1;
    while ($numero <= 3) {
        echo " El número es $numero ";
        echo "<br>";
        echo "<p>";
        $numero = $numero +1;
    }

    // Repetir un mensaje con while
    echo "<hr>";
    $veces = 0;
    while ($veces <= 4) {
        echo "$veces . - Hola que tal ";
        echo "<p>";
        $veces ++;
    }

    // Do while
    // Si necesitas al menos una iteracion segura 
    // y después una evaluación usa do while

    do {
        $respuesta = "no";
        echo "Continuar?: $respuesta";
    } while ($respuesta === "si");

    echo "<hr>";

    // Iteración garantizada
    $contador = 1;

    do {
        echo "Ejecucion $contador";
        $contador ++;
        echo "<p>";
    } while ($contador <= 3);

    // FOR
    /* Es una estructura de control de bucle
    esta tiene un inicio un fin y un acumulador */

    // Inicio    Fin     Incremento
    echo "<hr>";
    for ($i=0; $i < 10; $i++) { 
        echo $i;
    }

    // Hacer una tabla de multiplicar
    echo "<hr>";
    $multiplicar = 2;
    for ($i=0; $i <= 10; $i++) { 
        $tabla = $multiplicar . " X " . $i . " = " . ($multiplicar * $i);
        echo $tabla . "<br>";
    }

    

?>