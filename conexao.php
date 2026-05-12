<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conexao = new PDO("mysql:host=$servername", $username, $password);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS banco;
              USE banco;
              CREATE TABLE IF NOT EXISTS tb_produto(
                id int PRIMARY KEY AUTO_INCREMENT,
                nome varchar(100) not null,
                quantidade int not null,
                preco decimal(10,2) not null,
                foto VARCHAR(150) not null)
                ";

    $conexao->exec($sql);

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
