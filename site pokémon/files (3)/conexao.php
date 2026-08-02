<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "pokecard";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if(!$conexao) {
    die("Erro na conexao: " . mysqli_connect_error());
}

?>
