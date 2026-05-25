<?php

require_once "config/conexao.php";
require_once "includes/header.php";

$id = $_GET['id'];

$sql = $conexao->prepare(
    "SELECT * FROM produtos WHERE id = :id"
);

$sql->execute([
    ':id' => $id
]);

$produto = $sql->fetch(PDO::FETCH_ASSOC);

?>

<h2>Editar Produto</h2>

<form action="save.php" method="POST">

    <input type="hidden"
    name="id"
    value="<?= $produto['id'] ?>">

    <input type="text"
    name="nome"
    value="<?= $produto['nome'] ?>">

    <input type="text"
    name="fabricante"
    value="<?= $produto['fabricante'] ?>">

    <input type="number"
    step="0.01"
    name="preco"
    value="<?= $produto['preco'] ?>">

    <input type="number"
    name="estoque"
    value="<?= $produto['estoque'] ?>">

    <button type="submit">
        Salvar
    </button>

</form>

<?php require_once "includes/footer.php"; ?>