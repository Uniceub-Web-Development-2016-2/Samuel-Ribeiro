<?php
	
	include_once("../db/conexao.php");
	session_start();
	
	if(isset($_POST['senha']) && isset($_POST['novasenha1']) && isset($_POST['novasenha2'])){
		$senha = $_POST['senha'];
		$novasenha1 = $_POST['novasenha1'];
		$novasenha2 = $_POST['novasenha2'];
		
		$user = $_SESSION['usuariohb'];
		$pass = $_SESSION['senhahb'];

	if($senha != $pass){
		header('Location: ../home.php?pagina=perfil&action=alterarsenha&msg=3');
		die;
	}

	if($novasenha1 != $novasenha2){
		header('Location: ../home.php?pagina=perfil&action=alterarsenha&msg=4');
		die;
	}

	$conexao = new DBConnector();

	$sql = $conexao->query("UPDATE tb_users SET senha = '".$novasenha1."' WHERE usuario = '".$user."'");

	header('Location: ../home.php?pagina=perfil&action=alterarsenha&msg=2');
	sleep(5);
	session_destroy();
	session_unset(['usuariohb']);
	session_unset(['senhahb']);
	header('Location: ../home.php');
}
?>
