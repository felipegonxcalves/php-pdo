<?php

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "");

    $sql = "SELECT * FROM cliente where id=:id";
    $id = 1;
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    print_r($stmt->fetch(PDO::FETCH_ASSOC));

}catch (\PDOException $e){
    echo "Não foi possível realizar a conexão com o banco de dados, ERRO:".$e->getMessage();
}
