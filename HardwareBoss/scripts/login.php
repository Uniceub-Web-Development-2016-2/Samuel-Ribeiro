<?php
session_start();
include_once('../httpful.phar');
include('../model/md_usuario.php');

if(isset($_POST['logar'])){

	$get_request = 'http://localhost:8080/APIrest/tb_users/search?usuario="'.$_POST['usuario'].'"&senha="'.$_POST['senha'].'"';

	$response = \Httpful\Request::get($get_request)->send();

	if($response == "[]") {
		header("Location: ../home.php");
	}

	$tudo = explode(',',str_replace('{','',str_replace('}','',str_replace('[','',str_replace(']','',str_replace('"','',$response))))));

	for($i = 1; $i < count($tudo); $i++){
		$valor[$i] = explode(':',$tudo[$i]); 
	}

	$counter = 0;
	for($j = 1; $j < count($valor); $j++){
		if($j%2 >= 0){
			$values[$counter] = $valor[$j][1];
			$counter++;
		}
	}

	$usuario = new Usuario($values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6], $values[7]);

	$_SESSION['usuariohb'] = $usuario->getUsuario();
	$_SESSION['permissao'] = $usuario->getPermissao();

	header("Location: ../home.php");

}

/*include_once('../db/conexao.php');

$conexao = new DBConnector();

if(isset($_POST['logar'])){

		// RECUPERAR DADOS FORM
		$usuario = trim(strip_tags($_POST['usuario']));
		$senha = trim(strip_tags($_POST['senha']));

		// SELECIONAR BANCO DE DADOS
		$select = "SELECT * FROM tb_users WHERE usuario=:usuario AND senha=:senha";

		try{
			$result = $conexao->prepare($select);
			$result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
			$result->bindParam(':senha', $senha, PDO::PARAM_STR);
			$result->execute();
			$row = $result->fetch(PDO::FETCH_ASSOC);
			$contar = $result->rowCount();
			
			if ($contar>0) {
				
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];

				$_SESSION['usuariohb'] = $usuario;
				$_SESSION['senhahb'] = $senha;
				$_SESSION['permissao'] = $row['permissao'];
				header('Location: ../home.php');
				
			}else{
				
				header('Location: ../home.php?error=1');
				
			}
			
		}catch(PDOException $e){
			echo $e;
		}
	} */
?>