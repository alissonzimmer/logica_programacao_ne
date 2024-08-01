<?php

class MinhaClasse {
    function saudacao($usuario) {
        echo("Olá " . $usuario . ", este é meu site!");
    }
}

$minhaClasse = new MinhaClasse();
$minhaClasse->saudacao($_GET['nome123']);