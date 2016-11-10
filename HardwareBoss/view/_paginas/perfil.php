<?php
	if(!isset($_SESSION['usuariohb'])){
		(header("location: home.php"));
		die;
	}

	$title = ["Editar Perfil", "Alterar Senha"];
	$form = ['editarperfil', 'alterarsenha'];

?>


<div id="left">
<div class="container">
	<div class="title">
		<?php

		if(isset($_GET['action']) && $_GET['action'] < count($form) && $_GET['action'] >= 0){

			echo $title[$_GET['action']];

		} else {

			echo "Minha Conta";

		}

		?>
	</div>

	<div class="content" style="background-color: #fff;">
		<?php if(isset($_GET['action']) && $_GET['action'] < count($form) && $_GET['action'] >= 0){

			include_once("_forms/".$form[$_GET['action']].".html");

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
			<a href="?pagina=perfil&action=0">Editar Perfil</a>
			<a href="?pagina=perfil&action=1">Alterar Senha</a>

		</div>
	</div>
</div>

<div style="clear:both">
	
</div>