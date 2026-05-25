<?php

require_once "config/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

$sql = $conexao->prepare(

    "UPDATE produtos SET

    nome = :nome,
    fabricante = :fabricante,
    preco = :preco,
    estoque = :estoque

    WHERE id = :id"

);

$sql->execute([

    ':id' => $id,
    ':nome' => $nome,
    ':fabricante' => $fabricante,
    ':preco' => $preco,
    ':estoque' => $estoque

]);

header("Location: index.php");

?>