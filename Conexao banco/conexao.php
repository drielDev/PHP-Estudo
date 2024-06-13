<?php
    $banco = new mysqli("localhost", "root", "", "estudos_php");
    if ($banco->error) {
        die("Falha ao conectar ao banco de dados: " . $banco->error);
    }

?>