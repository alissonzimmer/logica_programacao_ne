<?php

class MinhaClasse {
    function converteFahrenheitParaCelsius($fahrenheit) {
        return (($fahrenheit - 32) * 5) / 9;
    }
}

$minhaClasse = new MinhaClasse();
$celsius = $minhaClasse->converteFahrenheitParaCelsius($_GET['f']);

echo("{$_GET['f']}F é equivalente a {$celsius} ºC");