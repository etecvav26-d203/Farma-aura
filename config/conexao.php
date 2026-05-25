<?php

$host = "localhost";
$banco = "farmacia";
$usuario = "root";
$senha = "";

try {

    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8",
        $usuario,
        $senha
    );

    $conexao->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch(PDOException $erro){

    echo "Erro: " . $erro->getMessage();

}