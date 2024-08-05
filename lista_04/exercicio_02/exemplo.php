<?php

class MinhaClasse {
    function swap($a, $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;

        return [$a, $b];
    }
}

$minhaClasse = new MinhaClasse();
list($a, $b) = $minhaClasse->swap($_GET['a'], $_GET['b']);

$result = [
    'antes' => "Valores antes da troca: A = {$_GET['a']}, B = {$_GET['b']}",
    'apos' => "Valores apos a troca: A = {$a}, B = {$b}"
];

echo(json_encode($result));