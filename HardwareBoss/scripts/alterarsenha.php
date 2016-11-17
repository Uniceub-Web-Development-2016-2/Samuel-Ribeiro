<?php
	
	include_once("../db/conexao.php");
	session_start();
	
	if(isset($_POST['senha']) && isset($_POST['novasenha1']) && isset($_POST['novasenha2'])){
		$senha = $_POST['senha'];
		$novasenha1 = $_POST['novasenha1'];
		$novasenha2 = $_POST['novasenha2'];
		
		
		$lul = $_SESSION['usuariohb'];

	$conexao = new DBConnector();

	$sql = $conexao->query("UPDATE tb_users SET senha = '".$novasenha1."' WHERE usuario = '".$lul."'");

	header('Location: ../home.php');

}
?>
