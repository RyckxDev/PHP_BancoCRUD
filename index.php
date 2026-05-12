<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a class="brand" href="index.php">Minha Loja</a>
    <a href="loja.php">Loja</a>
    <a href="index.php">Novo Produto</a>
    <a href="produtos.php">Gerenciar Produtos</a>
</nav>

<!-- FORMULÁRIO DE CADASTRO -->
<div class="container">
    <h1>Novo Produto</h1>

    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label>Produto</label>
        <input type="text" name="nome" placeholder="Digite o nome">

        <label>Quantidade</label>
        <input type="number" name="quantidade">

        <label>Preço</label>
        <input type="number" name="preco" step="0.01">

        <label>Foto</label>
        <input type="file" name="foto">

        <input type="submit" value="Salvar">
    </form>

    <a class="link-secundario" href="produtos.php">Ver Produtos</a>
</div>


</body>
</html>
