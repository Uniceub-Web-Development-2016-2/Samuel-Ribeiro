<?php
	
	include_once('../controller/util.php');
	include_once('../httpful.phar');

	if(isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['confirmar']) && 
	isset($_POST['email']) && isset($_POST['genero']) && isset($_POST['datanasc'])){
	

		$usuario = $_POST['usuario'];
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$confirmar_senha = $_POST['confirmar'];
		$email = $_POST['email'];
		$genero = $_POST['genero'];
		$datanasc = $_POST['datanasc'];



		if(strlen($usuario) <= 5){
		header('Location: ../home.php?pagina=cadastro&msg=2');
		die;
		}

		if($senha != $confirmar_senha){
		header('Location: ../home.php?pagina=cadastro&msg=3');
		die;
		}

		
		if(is_null($usuario) || is_null($nome) || is_null($senha) || is_null($confirmar_senha) || is_null($email) || is_null($genero) || is_null($datanasc)){
		header('Location: ../home.php?pagina=cadastro&msg=4');
		die;
		}

        /*
		if(validaEmail($email)){
			header('location: ../home.php?pagina=cadastro&msg=6');
			die;
		}
		*/

		$register_array = array('usuario' => $usuario, 'nome' => $nome, 'senha' => $senha, 'email' => $email, 'genero' => $genero, 'datanasc' => $datanasc);

		$body = json_encode($register_array);
		$url = "http://localhost:8080/APIrest/tb_users";
		
		$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 

		$array = json_decode($response->body, true);

		if(!empty($array)){
		
		header('Location: ../home.php?pagina=cadastro&msg=5');
		
		}
		else{
			
		header('Location: ../home.php?pagina=cadastro&msg=2');
	}

}
?> 