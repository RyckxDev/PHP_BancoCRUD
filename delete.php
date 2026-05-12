<?php

include('conexao.php');

$id = $_GET['id'];

try {
    $delete = $conexao->prepare("DELETE FROM tb_produto WHERE id = :id");
    $delete->bindParam(':id', $id);
    $delete->execute();

    header('location:produtos.php');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conexao = null; // CORRIGIDO: faltava ponto e vírgula
?>
