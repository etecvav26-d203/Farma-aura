<?php

require 'config/conexao.php';
require 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = $conexao->prepare(
        "INSERT INTO produtos
        (nome, fabricante, preco, estoque)

        VALUES
        (:nome, :fabricante, :preco, :estoque)"
    );

    $sql->execute([

        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque

    ]);

    header("Location: index.php");

}
?>

<h2>Adicionar Produto</h2>

<form method="POST">

    <input type="text" name="nome" placeholder="Nome">



    <input type="text" name="fabricante" placeholder="Fabricante">



    <input type="text" name="preco" placeholder="Preço">



    <input type="text" name="estoque" placeholder="Estoque">



    <button type="submit">
        Salvar
    </button>

</form>
<?php require 'includes/footer.php' ?>