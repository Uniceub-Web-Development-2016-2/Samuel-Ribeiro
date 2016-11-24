<?php
	
	include_once("../Httpful.phar");
	session_start();
	
	if(isset($_POST['senha']) && isset($_POST['novasenha1']) && isset($_POST['novasenha2'])){
		
		$senha = $_POST['senha'];
		$novasenha1 = $_POST['novasenha1'];
		$novasenha2 = $_POST['novasenha2'];
		
		$id = $_SESSION['id'];
		$user = $_SESSION['usuariohb'];

		$get_request = "http://localhost:8080/APIrest/tb_users/search?id=".$id;

		$response = \Httpful\Request::get($get_request)->send();

		$response_array = json_decode($response->body, true)[0];

		if($senha != $response_array['senha']){
			header('Location: ../home.php?pagina=perfil&action=alterarsenha&msg=3');
			die;
		}

		if($novasenha1 != $novasenha2){
			header('Location: ../home.php?pagina=perfil&action=alterarsenha&msg=4');
			die;
		}

		$url = "http://localhost:8080/APIrest/tb_users";

		$update = array('senha' => $novasenha2, 'id' => $id);

		$body = json_encode($update);

		$response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();

		header('Location: ../home.php?pagina=perfil&action=alterarsenha&msg=2');

	}
?>
