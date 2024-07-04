<?php

abstract class Vehiculo
{
    protected $numRuedas;

    public function __construct()
    {
        $this->numRuedas = 0;
    }

    public abstract function mover(float $distancia);

    /**
     * @return mixed
     */
    public function getNumRuedas()
    {
        $this->setNumRuedas(5);
        return $this->numRuedas;
    }

    /**
     * @param mixed $numRuedas
     */
    public function setNumRuedas($numRuedas): void
    {
        $this->numRuedas = $numRuedas;
    }


}
