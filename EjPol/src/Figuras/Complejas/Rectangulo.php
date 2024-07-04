<?php

namespace FigurasComplejas;

use Upgrade\Poo\Poligono;

class Rectangulo extends Poligono
{
    protected int $base;
    protected int $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->base * $this->altura;
    }
}
