<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a class="brand" href="index.php">Minha Loja</a>
    <a href="loja.php">Loja</a>
    <a href="index.php">Novo Produto</a>
    <a href="produtos.php">Gerenciar Produtos</a>
</nav>

<div class="container" style="max-width: 900px;">
    <h1>Loja</h1>

    <div class="cards">
        <?php
        require('conexao.php');
        $select = $conexao->query("SELECT * FROM tb_produto");

        while ($produto = $select->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="card">
            <img src="<?php echo $produto['foto']; ?>" alt="<?php echo $produto['nome']; ?>">
            <h3><?php echo $produto['nome']; ?></h3>
            <p>Quantidade: <?php echo $produto['quantidade']; ?></p>
            <p class="preco">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
            <button class="btn-comprar">Comprar</button>
        </div>
        <?php } ?>
    </div>

    <?php $conexao = null; ?>
</div>

</body>
</html>
