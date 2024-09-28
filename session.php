<?php 

function verificarSessao()
{
    if (!isset($_SESSION['empresa_logada'])) {
        die("Erro: empresa não está logada.");
    }
}
