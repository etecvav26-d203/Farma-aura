<?php
require_once "config/conexao.php";
require_once "includes/header.php";

$sql = $conexao->prepare("SELECT * FROM produtos");
$sql->execute();

$produtos = $sql-> fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de Produtos</h2>
<?php if(count($produtos) > 0){ ?>
<div class="cards">

<?php foreach($produtos as $produto) { ?>

<div class="card">

    <h3><?= $produto['nome'] ?></h3>

    <p><strong>Fabricante:</strong>
    <?= $produto['fabricante'] ?></p>

    <p><strong>Preço:</strong>
    R$ <?= $produto['preco'] ?></p>

    <p><strong>Estoque:</strong>
    <?= $produto['estoque'] ?></p>

    <div class="acoes">
        <a href="update.php?id=<?= $produto['id'] ?>" class="editar">
            Editar
        </a>

        <a href="delete.php?id=<?= $produto['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este remédio?')" class="excluir">
            Excluir
        </a>
    </div>

</div>

<?php }} else { ?>

<h4 class="vazio">Nenhum remédio cadastrado</h4>

<?php } ?>

</div>

<?php require_once "includes/footer.php"; ?>