<?php

class MinhaClasse {
    function areaRetangulo($base, $altura) {
        return ($base * $altura) / 2.0;
    }
}

$minhaClasse = new MinhaClasse();
$area = number_format($minhaClasse->areaRetangulo((float) $_GET['base'], (float) $_GET['altura']), 3, ',', '.');

echo("A area do retangulo é {$area}");