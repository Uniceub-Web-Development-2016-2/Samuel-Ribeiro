<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<?php
            if(isset($_GET['msg'])){
            ?>
            
            <div class="msg">
            
            <?php
                       $msg = $_GET['msg'];
                        switch($msg){
                              case 1:
                                    ?>
                                    <div class="alert alert-success" role="alert">POST criado com sucesso!</div>
                                    <?php
                                    break;                                                           
                        }
            ?>
            </div>
            <?php
            }
?>

<form method="POST" action="scripts/novopost.php" id="novopost">
	<label name="titulo">Título:</label>
	<input type="text" name="titulo" id="form_title" onkeydown="changeTitle()" style="width: 70%;">
	
	<br><br>
	
	<label name="conteudo" style="width: 98%">Conteúdo:</label>
	
	<textarea rows="4" id="form_content" name ="conteudo" onchange="changeContent()" style="width: 100%; max-width: 100%; padding: 4px; min-height: 130px; min-width: 100%; font-family: sans-serif;"></textarea>
	<br><br>
	
	<input type="button" value="Limpar" name="Limpar" onclick="document.getElementById('novopost').reset();">
	
	<input type="submit" value="Publicar" name="Publicar">
	
</form>

<div class="separator"></div>
