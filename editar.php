<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a class="brand" href="index.php">Minha Loja</a>
    <a href="index.php">Novo Produto</a>
    <a href="produtos.php">Gerenciar Produtos</a>
</nav>

<div class="container">
    <h1>Editar Produto</h1>

    <?php
    include('conexao.php');

    $id = $_GET['id'];

    // CORRIGIDO: estava DELETE, deve ser SELECT
    $select = $conexao->prepare("SELECT * FROM tb_produto WHERE id = :id");
    $select->bindParam(':id', $id);
    $select->execute();

    $produto = $select->fetch(PDO::FETCH_ASSOC);
    ?>

    <form action="update.php" method="post">
        <label>ID</label>
        <input type="text" name="id" readonly value="<?php echo $produto['id']; ?>">

        <label>Produto</label>
        <input type="text" name="nome" value="<?php echo $produto['nome']; ?>">

        <label>Quantidade</label>
        <input type="number" name="quantidade" value="<?php echo $produto['quantidade']; ?>">

        <label>Preço</label>
        <input type="number" name="preco" step="0.01" value="<?php echo $produto['preco']; ?>">

        <input type="submit" value="Atualizar">
    </form>
</div>

<?php $conexao = null; ?>

</body>
</html>
