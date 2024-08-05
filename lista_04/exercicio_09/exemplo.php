<?php

class MinhaClasse {
    function ehBissexto($ano) {
        return (!($ano % 4) && ($ano % 100)) || !($ano % 400);
    }
}

$minhaClasse = new MinhaClasse();
$resultado = "O ano {$_GET['ano']} não é bissexto";
if ($minhaClasse->ehBissexto((int) $_GET['ano'])) {
    $resultado = "O ano {$_GET['ano']} é bissexto";
}

echo($resultado);