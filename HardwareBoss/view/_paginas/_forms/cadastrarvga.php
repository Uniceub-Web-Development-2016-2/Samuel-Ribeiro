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
                                    <div class="alert alert-success" role="alert">VGA cadastrada com sucesso!</div>
                                    <?php
                                    break;                                                           
                        }
            ?>
            </div>
            <?php
                  }
            ?>





<form method="POST" action="scripts/cadastrarvga.php" id="cadastrovga_form">
	
	<label>Nome</label>
	<input type="text" name="nome" required>

	<br><br>

	<label>Bandwidth</label>
	<input type="text" name="bandwidth" required>
	
	<br><br>

	<label>Boost Clock</label>
	<input type="text" name="boostclock" required>

	<br><br>

	<label>Brand</label>
	<input type="text" name="brand" required>

	<br><br>

	<label>Bus Width</label>
	<input type="text" name="buswidth" required>
	
	<br><br>

	<label>Driver</label>
	<input type="text" name="driver" required>

	<br><br>

	<label>GPU</label>
	<input type="text" name="gpu" required>

	<br><br>

	<label>GPU Clock</label>
	<input type="text" name="gpuclock" required>
	
	<br><br>

	<label>I/O</label>
	<input type="text" name="io" required>

	<br><br>

	<label>Memory Clock</label>
	<input type="text" name="memoryclock" required>

	<br><br>

	<label>Memory Size</label>
	<input type="text" name="memorysize" required>
	
	<br><br>

	<label>Minimum Power Supply</label>
	<input type="text" name="minimumpowersupply" required>

	<br><br>

	<label>Model</label>
	<input type="text" name="model" required>

	<br><br>

	<label>Recommended Power Supply</label>
	<input type="text" name="recommendedpowersupply" required>
	
	<br><br>

	<label>Realease Date</label>
	<input type="text" name="releasedate" required>

	<br><br>

	<label>Shaders</label>
	<input type="text" name="shaders" required

	<br><br>

	<label>Technology</label>
	<input type="text" name="technology" required>

	<br><br>

	<label>Transistors</label>
	<input type="text" name="transistors" required>

	<br><br>

	<label>Website</label>
	<input type="text" name="website" required>

	<br><br>

	<!--<label>Imagem</label>
	<input type="file" name="imagem">
	-->

	<br><br>

	<input type="reset" value="limpar">
	<input type="submit" value="Salvar" name="Salvar">

</form>