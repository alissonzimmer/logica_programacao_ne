<?php

class MinhaClasse {
    function somaDoisValores($a, $b) {
        return $a + $b;
    }
}

$minhaClasse = new MinhaClasse();
echo("A soma de {$_GET['a']} e {$_GET['b']} é {$minhaClasse->somaDoisValores($_GET['a'], $_GET['b'])}");