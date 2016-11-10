<?php
session_start();
include_once('../db/conexao.php');

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
	} 
?>