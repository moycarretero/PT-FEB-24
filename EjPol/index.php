<?php
    require_once "vendor/autoload.php";

    use Upgrade\Poo\Figuras\Cuadrado;
    use FigurasComplejas\Rectangulo;

    $cuadrado = new Cuadrado(5);
    $rectangulo = new Rectangulo(2, 10);

    echo "El área del cuadrado es ".$cuadrado->calcularArea();
    echo "<br>El área del rectángulo es ".$rectangulo->calcularArea();
