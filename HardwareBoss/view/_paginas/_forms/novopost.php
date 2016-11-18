<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<script type="text/javascript">
	
	function changeTitle(){

		if(document.getElementById("form_title").value == "")
		{
			document.getElementById("preview_title").innerHTML = "Título";
		} else {

			document.getElementById("preview_title").innerHTML = document.getElementById("form_title").value;

		}
	}

	function changeContent(){

		if(document.getElementById("form_content").value == ""){

			document.getElementById("preview_content").innerHTML = "Conteúdo";

		} else {

			document.getElementById("preview_content").innerHTML = document.getElementById("form_content").value;

		}
	}

</script>

<form method="POST" action="scripts/novopost.php" id="novopost">
	<label name="titulo">Título:</label>
	<input type="text" name="titulo" id="form_title" onchange="changeTitle()" style="width: 70%;">
	
	<br><br>
	
	<label name="conteudo" style="width: 98%">Conteúdo:</label>
	
	<textarea rows="4" id="form_content" name ="conteudo" onchange="changeContent()" style="width: 100%; max-width: 100%; padding: 4px; min-height: 130px; min-width: 100%; font-family: sans-serif;"></textarea>
	<br><br>
	
	<input type="button" value="Limpar" name="Limpar" onclick="document.getElementById('novopost').reset();">
	
	<input type="submit" value="Publicar" name="Publicar"> 
	
</form>

<!--<div class="separator"></div>
<br>
<div class="container" style="margin: 0;">
	<div class="title" style="background-color: #C00; color: #FFF;">
		Preview
	</div>
	<div class="content" style="border: 0; background-color: #fff;">
		<div class="container" style="margin: 0">
			<div class="title" id="preview_title">
				Título
			</div>
			<div class="content" id="preview_content">
				Conteúdo
			</div>
		</div>
	</div>
</div>
-->