<?php
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['usuario'])) {
    header("Location: ../index.shtml");
    exit;
}

?>