<?php

    // Finally es opcional

    try {
        // Aquí ejecutamos el código que puede fallar
        $a = 10;
        $b = 0;
        if ($b === 0) {
            throw new Exception("No se puede dividir entre cero");
        }

        echo $a / $b;
    } catch (Exception $th) {
        // Aquí procesa el error 
        echo $th->getMessage();
    }   finally{
        echo "<br>";
        echo "Operación finalizada";
    }

    echo "<hr>";
    // Validación de email
    try {
        $email = "correo@hol.com";

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El correo no es válido");
        }

        echo "Correo válido $email";
    } catch (Exception $th) {
        echo "Error, " . $th->getMessage();
    }
?>