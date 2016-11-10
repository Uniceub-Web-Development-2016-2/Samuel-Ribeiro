
<?php
	
	include_once('../db/conexao.php');

	if(isset($_POST['usuario']) && isset($_POST['name']) && isset($_POST['senha']) && isset($_POST['confirmar']) && 
	isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['birthdate'])){
	
		$usuario = $_POST['usuario'];
		$nome = $_POST['name'];
		$senha = $_POST['senha'];
		$confirmar_senha = $_POST['confirmar'];
		$email = $_POST['email'];
		$genero = $_POST['gender'];
		$datanasc = $_POST['birthdate'];

		if($senha != $confirmar_senha){
			header('Location: ../home.php?pagina=cadastro&error=1');
			die;
		}
		
		if(strlen($usuario) <= 5){
			header('Location: ../home.php?pagina=cadastro&error=3');
			die;
		}

		$conexao = new DBConnector();
		
		$result = $conexao->query("INSERT INTO tb_users (usuario, nome, senha, email, genero, datanasc) VALUES('".$usuario."', '".$nome."', '".$senha."', '".$email."', '".$genero."', '".$datanasc."')");


		header('Location: ../home.php');

		}else{
			
		header('Location: ../home.php?pagina=cadastro&error=2');
	}

?> 