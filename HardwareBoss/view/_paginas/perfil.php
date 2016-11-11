<?php
	if(!isset($_SESSION['usuariohb'])){
		(header("location: home.php"));
		die;
	}

	$title = ['editarperfil' => "Editar Perfil", 'alterarsenha' => "Alterar Senha"];
	$form = ['editarperfil' => 'editarperfil', 'alterarsenha' => 'alterarsenha'];

?>


<div id="left">
<div class="container">
	<div class="title">
		<?php

		if(isset($_GET['action'])  && in_array($_GET['action'], $form)){

			echo $title[$_GET['action']];

		} else {

			echo "Bem vindo ao Painel de Controle";

		}

		?>
	</div>

	<div class="content" style="background-color: #fff;">
		<?php if(isset($_GET['action']) && in_array($_GET['action'], $form)){

			include_once("_forms/".$form[$_GET['action']].".html");

		} else {
			echo "Minha Conta";
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
			<a href="?pagina=perfil&action=editarperfil">Editar Perfil</a>
			<a href="?pagina=perfil&action=alterarsenha">Alterar Senha</a>

		</div>
	</div>
</div>

<div style="clear:both">
	
</div>