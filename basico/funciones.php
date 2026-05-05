<?php
    // Funciones
    // Es un bloque de código reutilizable
    // Muy fácil. Función Básica
    function saludar(){
        echo "Hola";
    }
    saludar();
    echo "<br>";

    // Funciones sin parámetro de retorno
    function mostrar(){
        echo "Este es el curso de php 8";
    }
    mostrar();

    // Funciones con parámetros
    echo "<br>";
    function sumar($valor1, $valor2){
        echo $valor1 + $valor2;
    }
    sumar(5, 8);
    echo "<br>";
    sumar(10, 9);

    // Funciones con retorno
    echo "<br>";
    function multiplicar($valor1, $valor2){
        return $valor1 * $valor2;
    }

    echo multiplicar(8, 8);
    echo "<br>";
    $total = multiplicar(7, 7);

    if ($total < 100) {
        echo "$total es un valor menor a cien";
    }

    // Funciones con tipos de datos
    /* echo "<br>";
        // Olbiga a hacer las funciones con tipos de datos
        declare(strict_types = 1);
        // Funciones con tipado de datos
        function dividir(float $valor1, float $valor2) : float {
            return $valor1 / $valor2;
            
        }

        echo dividir(10, 2);
    */

    // Funciones anónimas
    echo "<br>";
    $suma = function($a, $b){
        return $a + $b;
    };
    echo $suma(4, 5);

    // Funciones con flecha
    echo "<br>";
    // Fn es lo mismo que function
    $multiplicar = fn($a, $b) => $a * $b;
    echo multiplicar(4, 10);

    
    
?>