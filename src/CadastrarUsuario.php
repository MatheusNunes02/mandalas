<?php
require_once 'conexao.php';


$conexao = new DbConnection();
$conexao = $conexao->connect();

$nome = 'Matheus';
$foto = 'Teste';

$stmt = $conexao->prepare("INSERT INTO users (nome, foto) VALUES (?, ?)");

$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $foto);

$stmt->execute();

echo 'UsuarioCadastrado';
header('Location: http://localhost/Mandala/');
?>