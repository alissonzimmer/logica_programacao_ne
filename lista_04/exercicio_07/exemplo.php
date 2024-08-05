<?php

class MinhaClasse {
    function areaCirculo($raio) {
        return pow($raio, 2) * pi();
    }
}

$minhaClasse = new MinhaClasse();
$area = number_format($minhaClasse->areaCirculo((float) $_GET['raio']), 3, ',', '.');;

echo("A area do círculo é {$area}");