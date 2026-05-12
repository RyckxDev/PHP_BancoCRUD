<?php

require('conexao.php');

$id         = $_POST['id'];
$nome       = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco      = $_POST['preco'];

$sql = $conexao->prepare("UPDATE tb_produto SET
                          nome = :nome,
                          quantidade = :quantidade,
                          preco = :preco
                          WHERE id = :id");

$sql->execute(array(
    ':id'         => $id,
    ':nome'       => $nome,
    ':quantidade' => $quantidade,
    ':preco'      => $preco
));

$conexao = null;

header('location:produtos.php');
?>
