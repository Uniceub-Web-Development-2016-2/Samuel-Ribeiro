<?php

      if(isset($_SESSION['usuariohb'])){

            header("location: index.php?pagina=perfil");
            die;

      }
?>

<script type="text/javascript">
jQuery(function($){
   $("#birthdate").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
});
</script>



	<div  style="padding-bottom: 10px;">
      <div class="container">
		<div class ="title">
		Registre-se no HardwareBoss
		</div>
		<div class="content" style="background-color: #FFF;">

            <?php
                  if(isset($_GET['msg'])){
            ?>
            
            <div class="msg">
            
            <?php
                        $msg = $_GET['msg'];

                        switch($msg){
                              case 1:
                                    break;
                              case 2:
                                    ?>
                                    <div class="alert alert-danger" role="alert">O seu nome usuário deve ser maior que 5 caracteres!</div>
                                    <?php
                                    break;
                              case 3:
                                    ?>
                                    <div class="alert alert-danger" role="alert">Confirmar senha esta diferente da senha!</div>
                                    <?php
                                    break;

                              case 4:
                                    ?>
                                    <div class="alert alert-danger" role="alert">Por favor, preencha todos os campos!</div>
                                    <?php
                                    break;  

                              case 5: 
                                    ?>
                                    <div class="alert alert-success" role="alert">Usuário criado com sucesso! Bem vindo ao HardwareBOSS!</div>
                                    <?php
                                    break;                                       
                              case 6:
                                    ?>
                                    <div class="alert alert-danger" role="alert">E-mail inválido! Por favor, entre com um e-mail válido.</div>
                                    <?php
                                    break;
                        }
            ?>
            </div>
            <?php
                  }
            ?>

            <form action="scripts/cadastrar.php" method="POST" id="cadastro_form">

            <label for="usuario">Usuário: </label>
            <input type="text" name="usuario" id="usuario" required>
            
            <br><br>

            <label for="name">Nome: </label>
            <input type="text" name="nome" id="name" required>

            <br><br>
  			
  		<label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" required>
 
            <br><br>

            <label for="senha">Confirmar Senha: </label>
            <input type="password" name="confirmar" id="senha" required>
 
            <br><br>
            
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email" required>
 
            <br><br>
            
            <div class="group">
            <label class="radio" for="gener_m">Masculino </label>
            <input type="radio" name="genero" id="gener_m" value="m">
            
            </div>
            
            <div class="group">
            <label class="radio" for="gener_f">Feminino </label>
            <input type="radio" name="genero" id="gener_f" value="f">
            
            </div>
             
            <br><br>
 
            <label for="birthdate">Data de Nascimento: </label>
            <input type="text" name="datanasc" id="birthdate" required>
 
            <br><br>
 
            <input type="submit" href="view/home.html" value="Cancelar"> 
            <input type="submit" value="Cadastrar">
        
        </form>

		</div>
            </div>
	</div>

