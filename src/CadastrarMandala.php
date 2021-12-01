<?php
require_once 'conexao.php';

$conexao = new DbConnection();
$conexao = $conexao->connect();

$admiracao = 'teste';
$praticas = 'Teste';
$potencias = 'teste';
$habilidades = 'TESTE';
$caminho = 'teste';
$causa = 'teste3';
$territorio = 'teste4';
$FkUser = 1;

$stmt = $conexao->prepare("INSERT INTO mandalas (
 admiracao,
 praticas,
 potencias,
 habilidades,
 caminho,
 causa,
 territorio,
 FK_Id_users
  ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bindParam(1, $admiracao);
$stmt->bindParam(2, $praticas);
$stmt->bindParam(3, $potencias);
$stmt->bindParam(4, $habilidades);
$stmt->bindParam(5, $caminho);
$stmt->bindParam(6, $causa);
$stmt->bindParam(7, $territorio);
$stmt->bindParam(8, $FkUser);

echo 'Dor e tristeza';
$stmt->execute();

?>