<?php
	
	include_once('../db/conexao.php');
	session_start();
	
	if(isset($_POST['titulo']) && isset($_POST['conteudo'])){
	
	$titulo = $_POST['titulo'];
	$conteudo = $_POST['conteudo'];
	
	$lul = $_SESSION['id'];
	echo $lul;
	die;

	$conexao = new DBConnector();

	$sql = $conexao->query("INSERT INTO tb_posts(titulo, conteudo) VALUES ('".$titulo."', '".$conteudo."')");

	}
?>