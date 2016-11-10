<?php

      if(isset($_SESSION['usuariohb'])){

            header("location: home.php?pagina=perfil");
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
                  if(isset($_GET['error'])){
            ?>
            <div class="error">
            <?php
                        $error = $_GET['error'];

                        switch($error){
                              case 1:
                                    echo "A senha e a confirmação da senha deve ser iguais!";
                                    break;
                              case 2:
                                    echo "Por favor, preencha todos os campos!";
                                    break;
                              case 3:
                                    echo "O usuário deve conter mais de 5 caracteres!";
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
            <input type="text" name="name" id="name" required>

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
            <input type="radio" name="gender" id="gener_m" value="m">
            
            </div>
            
            <div class="group">
            <label class="radio" for="gener_f">Feminino </label>
            <input type="radio" name="gender" id="gener_f" value="f">
            
            </div>
             
            <br><br>
 
            <label for="birthdate">Data de Nascimento: </label>
            <input type="text" name="birthdate" id="birthdate" required>
 
            <br><br>
 
            <input type="submit" href="view/home.html" value="Cancelar"> 
            <input type="submit" value="Cadastrar">
        
        </form>

		</div>
            </div>
	</div>

