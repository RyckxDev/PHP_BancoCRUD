<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a class="brand" href="index.php">Minha Loja</a>
    <a href="index.php">Novo Produto</a>
    <a href="produtos.php">Gerenciar Produtos</a>
</nav>

<div class="container" style="max-width: 900px;">
    <h1>Gerenciar Produtos</h1>

    <?php
    require('conexao.php');
    $select = $conexao->query("SELECT * FROM tb_produto");
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

        <?php while ($produto = $select->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $produto['id']; ?></td>
            <td><img src="<?php echo $produto['foto']; ?>" alt="<?php echo $produto['nome']; ?>"></td>
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
            <td>
                <a class="btn-editar" href="editar.php?id=<?php echo $produto['id']; ?>">Editar</a>
                <a class="btn-excluir" href="delete.php?id=<?php echo $produto['id']; ?>">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <?php $conexao = null; ?>
</div>

</body>
</html>
