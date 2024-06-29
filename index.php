<?php

    $numero = 3;
    $numero = 'tres';
    $pi = 3.1416;


$nombre = 'Moises';
$apellidos = "Carretero";

//echo 'Me llamo '.$nombre.' '.$apellidos;

    $verdadero = true;
    $falso = false;
    $null = null;

    $frutas = [
        'fresa',
        'manzana',
        'melocotón',
        33 => 'plátano',
        '12X4TF99' => 'sandia',
        'aguacate',
        12 => 'naranja',
        'mandarina',
        2 => 'limón'
    ];

//    echo $frutas[1];
    $frutas[99] = 'maracuyá';
    $frutas[] = 'coco';

//    print_r($frutas);


    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];

    echo "Me llamo $nombre y tengo $edad años";

    echo "Esto es un cambio";
