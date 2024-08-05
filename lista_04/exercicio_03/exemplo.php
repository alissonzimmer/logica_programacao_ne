<?php

class MinhaClasse {
    function ehPar($num) {
        return $num % 2 == 0;
    }
}

$minhaClasse = new MinhaClasse();
$mensagem = "Número ímpar.";
$minhaClasse->ehPar($_GET['num']) && $mensagem = "Número par.";

echo($mensagem);