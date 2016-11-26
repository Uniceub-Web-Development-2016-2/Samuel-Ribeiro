<?php

	if(!isset($_SESSION['usuariohb']) || $_SESSION['permissao'] > 0){

		header("location: index.php");
		die;

}

	$title = ["Novo Post", "Cadastrar VGA", "Gerenciar VGA", "Gerenciar Usuários"];
	$form = ['novopost', 'cadastrarvga', 'gerenciarvga', 'gerenciarusuarios'];

?>

<div id="left">
<div class="container">
	<div class="title">
		<?php

		if(isset($_GET['action']) && $_GET['action'] < count($form) && $_GET['action'] >= 0){

			echo $title[$_GET['action']];

		} else {

			echo "Bem-vindo ao Painel de Controle";

		}

		?>
	</div>
	<div class="content" style="background-color: #fff;">
		<?php if(isset($_GET['action']) && $_GET['action'] < count($form) && $_GET['action'] >= 0){

			include_once("_forms/".$form[$_GET['action']].".php");

		} else {

			echo "Bem-vindo ao Painel de Controle";

		}

		?>
	</div>
</div>
</div>
<div id="right">
	<div class="container">
		<div class="title" id="popular">
			Painel de Controle
		</div>
		<div class="content" style="padding: 0">
			<a href="?pagina=admin&action=0">Novo Post</a>
			<a href="?pagina=admin&action=1">Cadastrar VGA</a>
			<a href="?pagina=admin&action=2">Gerenciar VGA</a>
			<a href="?pagina=admin&action=3">Gerenciar Usuários</a>
		</div>
	</div>
</div>

<div style="clear:both">
	
</div>