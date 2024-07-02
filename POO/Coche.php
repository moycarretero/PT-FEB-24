<?php

class Coche
{
    private string $matricula;
    private string $marca;
    private string $modelo;
    private int $kilometrosRecorridos;
    private float $cantidadCombustible;

    function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cantidadCombustible = 0;
        $this->kilometrosRecorridos = 0;
    }

    function mover(int $distancia)
    {
        $this->kilometrosRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia * 0.05;
    }

    function repostarCombustible(int $cantidadCombustible)
    {
        $this->cantidadCombustible += $cantidadCombustible;
    }

    function pasarITV()
    {

    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {


        $this->matricula = $matricula;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {


        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getKilometrosRecorridos(): int
    {
        return $this->kilometrosRecorridos;
    }

    public function setKilometrosRecorridos(int $kilometrosRecorridos): void
    {
        $this->kilometrosRecorridos = $kilometrosRecorridos;
    }

    public function getCantidadCombustible(): float
    {
        return $this->cantidadCombustible;
    }

    public function setCantidadCombustible(float $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    function pintaInfo()
    {
        echo "<ul>";
        echo "<li>Marca: $this->marca</li>";
        echo "<li>Modelo: $this->modelo</li>";
        echo "<li>Km Recorridos: $this->kilometrosRecorridos</li>";
        echo "<li>Cantidad Combustible: $this->cantidadCombustible</li>";
        echo "</ul>";
    }

}
