<?php

    function suma(int $num1, int $num2): int
    {
        $result = $num1 + $num2;
        return $result;
    }

    function saludo(string $nombre): void
    {
        echo "Buenos días $nombre";
    }

    function dameFecha(): string
    {
        return date("Y-m-d");
    }
