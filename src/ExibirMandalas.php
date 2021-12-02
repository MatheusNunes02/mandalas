<?php
require_once 'Conexao.php';

$conexao = new DbConnection();
$conexao = $conexao->connect();

$consulta = $conexao->query("SELECT admiracao,
praticas,
potencias,
habilidades,
caminho,
causa,
territorio,
FK_Id_users FROM mandalas;");

$rows = $consulta->fetchAll( PDO::FETCH_ASSOC );

print_r( $rows );

foreach( $rows as $row ){
    echo('<br>'.$row['admiracao'].'<br>');
    echo($row['praticas'].'<br>');
    echo($row['potencias'].'<br>');
    echo($row['habilidades'].'<br>');
    echo($row['caminho']).'<br>';
    echo($row['causa']).'<br>';
}

?>