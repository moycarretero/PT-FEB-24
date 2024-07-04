<?php

namespace Upgrade\Poo\Figuras;

use Upgrade\Poo\Poligono;

class Cuadrado extends Poligono
{
    protected int $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado ** 2;
    }
}
