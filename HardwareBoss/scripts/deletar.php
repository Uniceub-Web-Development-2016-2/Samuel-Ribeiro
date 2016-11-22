<?php

include_once('../db/conexao.php');

$id = $_GET['id'];

if(isset($id)){

$conexao = new DBConnector();
$query = $conexao->query('DELETE FROM nome_da_tabela WHERE id="'.$id.'"');

header('Location: ../home.php?pagina=admin&action=3');
}
?>


