
<?php
	
	include_once('../db/conexao.php');
	session_start();
	
	if(isset($_POST['titulo']) && isset($_POST['conteudo'])){
	
	$titulo = addslashes(trim($_POST['titulo']));
	$conteudo = addslashes(trim($_POST['conteudo']));


	$conexao = new DBConnector();

	$sql = $conexao->query("INSERT INTO tb_posts(titulo, conteudo, autor, data) 
	VALUES ('".$titulo."', '".$conteudo."', '".$_SESSION['id']."', '".date('d/m/Y h:i:s')."')");
	
	header('Location: ../home.php?pagina=admin&action=0&msg=1');

	}

?>