
<?php
		
	session_start();
	include_once('../Httpful.phar');
	
	if(isset($_POST['titulo']) && isset($_POST['conteudo'])){
	
	$titulo = addslashes(trim($_POST['titulo']));
	$conteudo = addslashes(trim($_POST['conteudo']));
	$autor = $_SESSION['id'];
	$data = date('d/m/Y - h:i:s');

	$register_array = array('titulo' => $titulo, 'autor' => $autor, 'conteudo' => $conteudo, 'data' => $data);

	$body = json_encode($register_array);
	
	$url = "http://localhost/APIrest/tb_posts";
		
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 

	$array = json_decode($response->body, true);

	header('Location: ../home.php?pagina=admin&action=0&msg=1');

	}


?>