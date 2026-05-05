<?php
    // Arrays Mixtos
    // Tienen índices y llaves
    // Asociativo e indexcado al mismo tiempo

    $arregloMixto = [
        "curso" => "php 8",
        0 => "Facultad autodidacta",
        "tipo" => "backend",
        1 => "programacion web"
    ];

    echo $arregloMixto["curso"];
    echo "<hr>";
    echo $arregloMixto[1];

?>