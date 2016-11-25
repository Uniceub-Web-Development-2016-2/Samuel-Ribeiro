<?php
session_start();
include('httpful.phar');
include_once("controller/util.php");

	$pagina = 'home';
	$titulo = utf8_encode('O chefão dos hardware');
	if(isset($_GET['pagina'])){
	  
    $get_request = 'http://localhost:8080/APIrest/tb_pagina/search?nome="'.$_GET['pagina'].'"';

    $response = \Httpful\Request::get($get_request)->send();

    $values = json_decode($response->body, true);

		if(count($values) > 0){
			$pagina = $_GET['pagina'];
			$titulo = $values[0]['titulo'];
		}
	}

?>

<!DOCTYPE html>
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="js/scrollCabecalho.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<html lang="pt-br">
<head>
   <meta charset="UTF-8"/>
   <title>HardwareBoss - <?php echo utf8_decode($titulo); ?></title>
   <link type="text/css" rel="stylesheet" href="view/_css/estilo.css"/>
   <!--<link type="text/css" rel="stylesheet" href="view/_css/bootstrap.css"/>-->
     
</head>

<body>
 
 <div id="cabecalho">
  
  <div id="logo_bg">
  <div id="logo">
  <img id="img_logo" src="view/_imagens/logo.png">
  
  <?php 

  	if (!isset($_SESSION['usuariohb'])) {

  ?>
   <div id="loginform">
    <div id="mainlogin">

     <form method="POST" action="scripts/login.php" id="form_login">
      <input id="input_usuario" type="text" name="usuario" placeholder="Usuário" value="" required>
      <input id="input_senha" type="password" name="senha" placeholder="Senha" value="" required style="margin-top: 20px;">
	     <?php if(isset($_GET['msg']) && $_GET['msg'] == 1){ ?>
	     <span class="msg">*Usuário ou senha incorretos.</span>
	     <?php } ?>
      <a href="?pagina=cadastro">Registrar</a>
      <input id="btn_logar" type="submit" name="logar" value="Entrar" class="btn-padrao" style="margin-top: 10px;">
	 </form>

    </div>
   </div>
   <?php
   
   } else { 

  		if($_SESSION['permissao'] == 0){

        echo "<div id=logado><img src=view/_imagens/account_icon.png id=user_img /><span>Bem-vindo, <a href=home.php?pagina=admin>".$_SESSION['usuariohb']."</a></span><a href=scripts/logout.php >Sair</a></div>";
      } else {
        echo "<div id=logado><img src=view/_imagens/account_icon.png id=user_img /><span>Bem-vindo, <a href=home.php?pagina=perfil>".$_SESSION['usuariohb']."</a></span><a href=scripts/logout.php >Sair</a></div>";
      }

    }
	
	?>
   </div>
  </div>
 
  <nav id ="top_menu">
  <ul>
   <li><a href="?pagina=home">Home</a></li>
   <li><a href="?pagina=lancamentos">Lançamentos</a></li>
   <li><a href="?pagina=review">Review</a></li>
   <li><a href="?pagina=artigos">Artigos</a></li>
   <li><a href="?pagina=games">Games</a></li>
   <li><a href="?pagina=comparacao">Comparação</a></li>
  </ul>
  </nav>
 </div>
<div id="main_content">
 <?php

      if($pagina == 'home'){

 ?>

    <div id="main_galery">
    <div class="box-shadow">
     <div id="main_img" style="background-image: url('view/_imagens/1.png');"><div class="title">Novo jogo de Dark Siders anunciado!</div><a href="#" id="verMais">Ver Mais</a><div id="galery_pagination"><span class="selected"></span><span></span><span></span></div></div>
    </div>
   </div>

  <?php

      }

  ?>

   <div id="main_container">
   <div id="conteudo">


  <?php
  	//Insere a página a ser mostrada
  	include('view/_paginas/'.$pagina.'.php');
   ?>


   </div>
   </div>
   <div id="rodape">
   &copy Copyright 2016 - Todos os direitos reservados
   </div>
 </div>

</body>

</html>