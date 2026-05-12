<?php

$nome      = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco     = $_POST['preco'];

if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === UPLOAD_ERR_OK) {

    $pasta    = "imagens/";
    $extensao = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    $foto     = $pasta . $nome . "." . $extensao;
    $info     = getimagesize($_FILES["foto"]["tmp_name"]);

    if ($info !== false) {
        if (!file_exists($foto)) {
            move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
        }
    }
}

try {
    require('conexao.php');

    $sql = "INSERT INTO tb_produto(nome, quantidade, preco, foto)
            VALUES (:nome, :quantidade, :preco, :foto)";

    $inserir = $conexao->prepare($sql);
    $inserir->bindParam(':nome',       $nome);
    $inserir->bindParam(':quantidade', $quantidade);
    $inserir->bindParam(':preco',      $preco);
    $inserir->bindParam(':foto',       $foto);
    $inserir->execute();

    header('location:index.php');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conexao = null;
?>
