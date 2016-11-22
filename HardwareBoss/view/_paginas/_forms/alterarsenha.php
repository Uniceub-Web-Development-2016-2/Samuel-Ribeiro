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
                                    <div class="alert alert-success" role="alert">Senha alterada com sucesso!Você será redirecionado. Por favor, entre no sistema com a nova senha.</div>
                                    <?php
                                    break;
                              case 3:
                              		?>
                              		<div class="alert alert-danger" role="alert">
                              		Ops! Essa não é a sua senha atual.</div>
                              		<?php
                              		break;
                              case 4:
                              		?>
                              		<div class="alert alert-danger" role="alert">
                              		Ops! A nova senha e confirmar senha tem que ser iguais.
                              		<?php
                              		break;

                        }
            ?>
            </div>
            <?php
                  }
            ?>

<form method="POST" action="scripts/alterarsenha.php" id="alterarsenha_form">
	<label name="senha">Senha Atual</label>
	<input type="type/text" name="senha" required>
	
	<br><br>

	<label name="novasenha1">Nova Senha</label>
	<input type="type/text" name="novasenha1" required>

	<br><br>

	<label name="novasenha2">Confirmar Senha</label>
	<input type="type/text" name="novasenha2" required>

	<br><br>

	<input type="reset" value="limpar">
	<input type="submit" value="Salvar" name="Salvar">
</form>