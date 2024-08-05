<?php

class MinhaClasse {
    function areaQuadrado($base, $altura) {
        return $base * $altura;
    }
}

$minhaClasse = new MinhaClasse();
$area = number_format($minhaClasse->areaQuadrado((float) $_GET['base'], (float) $_GET['altura']), 3, ',', '.');

echo("A area do quadrado é {$area}");