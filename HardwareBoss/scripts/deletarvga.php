<?php

	include_once("../httpful.phar");

	if(isset($_POST['id'])){

		$url = "http://localhost/APIrest/tb_vga";

		$user_array = array('id' => $_POST['id']);

		$body = json_encode($user_array);

		$response = \Httpful\Request::delete($url)->sendsJson()->body($body)->send();

	}

	header('Location: ../index.php?pagina=admin&action=2');

?>
