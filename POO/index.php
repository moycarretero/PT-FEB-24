<?php
    require_once "Coche.php";
    require_once "Vehiculo.php";

    $miCoche = new Coche("Ford", "Focus");
    $miCoche->repostarCombustible(50);
    $miCoche->mover(400);
    $miCoche->mover(150);
    // miCoche.cantidadCombustible
    // echo $miCoche->cantidadCombustible;
    $miCoche->pintaInfo();
    $miCoche->setNumRuedas(6);

    $miCoche->mover(1000);

    $miCoche->pintaInfo();

    $otroCoche = new Coche("Seat", "Ibiza");
    $otroCoche->repostarCombustible(20);
    $otroCoche->mover(23);
    $otroCoche->pintaInfo();

    $ferrari = new Coche("Ferrari", "Testarrosa");
    $ferrari->pintaInfo();

