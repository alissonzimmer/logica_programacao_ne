<?php

class MinhaClasse {
    function buscaMaiorValor($num1, $num2, $num3) {
        return max([$num1, $num2, $num3]);
    }
}

$minhaClasse = new MinhaClasse();
echo(
    "O maior valor informado foi {$minhaClasse->buscaMaiorValor($_GET['num1'], $_GET['num2'], $_GET['num3'])}"
);