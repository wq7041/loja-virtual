<?php
$host = "sql113.infinityfree.com";
$usuario = "if0_42161890";
$senha = "9Otg6XQs6EpRyAx";
$banco = "if0_42161890_cwbmotors";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8mb4");
?>