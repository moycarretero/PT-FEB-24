<?php

    $result = file_put_contents(
        "quijote.txt",
        " de cuyo nombre no quiero acordarme",
        FILE_APPEND
    );

    header("Content-Type: image/jpg");
    //header("Mi-Cacera: hola");

    //echo file_get_contents("badajoz.jpg");
echo "hola";

/*    if ($result === false) {
        echo "Error al guardar el archivo";
    } else {
        echo "Archivo guardado";
    }
*/
