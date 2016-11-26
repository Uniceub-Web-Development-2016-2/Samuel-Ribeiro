<?php
session_start();
include_once('../httpful.phar');

if(isset($_POST['logar'])){

	$get_request = 'http://localhost/APIrest/tb_users/search?usuario="'.$_POST['usuario'].'"&senha="'.$_POST['senha'].'"';

	$response = \Httpful\Request::get($get_request)->send();

	$values = json_decode($response->body, true)[0];

	if(!empty($values) && $values["usuario"] == $_POST["usuario"] && $values["senha"] == $values["senha"]){
 		$_SESSION['usuariohb'] = $values['usuario'];
		$_SESSION['permissao'] = $values['permissao'];
		$_SESSION['id'] = $values['id'];
	} else {
		header("Location: ../home.php?msg=1");
	}
	
	header("Location: ../home.php");

}

?>