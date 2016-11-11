<?php

	$conexao = new DBConnector();

	if(!isset($_GET['postid'])){
		header("location: home.php");
		die;
	}
	
	$result = $conexao->query("SELECT tb_posts.titulo, tb_posts.autor, tb_posts.conteudo, tb_posts.imagem, tb_posts.data, tb_users.nome FROM tb_posts INNER JOIN tb_users ON (tb_users.id = tb_posts.autor) WHERE tb_posts.id = '".$_GET['postid']."'");
	$row = $result->fetch(PDO::FETCH_ASSOC);
	
	$keywords = explode(' ', $row['titulo']);
	
	$filter = "";
	
	for($i = 0; $i < count($keywords); $i++){
		$filter = $filter.($i == 0 ? "" : " OR")." titulo like '%".str_replace(' ', '', $keywords[$i])."%'";
	}
	
	$_relacionados = $conexao->query("SELECT * FROM tb_posts WHERE (".$filter.") AND id != ".$_GET['postid']);
	
	$_comments = $conexao->query("SELECT * FROM tb_comments INNER JOIN tb_users ON tb_users.id = tb_comments.autor WHERE post_id = '".$_GET['postid']."'");
	
?>
<div id="left">
	<div class="container">
	<?php 
	
		if($result->rowCount() <= 0) { echo "Postagem não encontrada."; } else {
	
	?>
		<div class="title">
			<?php echo utf8_decode($row['titulo']); ?>
		</div>
		<div class="content">
			<?php echo utf8_decode($row['conteudo']); ?>
		</div>
		<div class="autor">
			<i><a href=""><?php echo utf8_decode($row['nome']); ?></a></i>
			-
			<?php echo utf8_decode($row['data']); ?>
		</div>

	</div>
	<div class="comments">
		<div class="title">Comentários</div>
		<div class="content">
		<?php
		
			while($comments = $_comments->fetch(PDO::FETCH_ASSOC)){
		
		?>
			<div class="comment">
				<div class="title"><div><?php echo $comments['titulo']; ?></div><div class="autor"><a href="#"><?php echo $comments['usuario']; ?></a> - <?php echo $comments['data']; ?></div></div>
				<div class="content"><?php echo $comments['conteudo']; ?></div>
			</div>
		<?php
		
			}
		
		?>
		</div>
	</div>
</div>
<div id="right">
	<div class="container">
			<div class="title" id="popular">
				Posts Relacionados
			</div>
			<div class="content" style="padding: 0">
				<?php
				
					if($_relacionados->rowCount() > 0){

						while($relacionados = $_relacionados->fetch(PDO::FETCH_ASSOC)){
				
				?>
					<a href="?pagina=post&postid=<?php echo utf8_decode($relacionados['id']); ?>"><?php echo restringeStr(utf8_decode($relacionados['titulo']), 35); ?></a>
				<?php
				
						}

					} else {
				?>
						<div style="padding: 10px;">Nenhuma postagem encontrada.</div>
				<?php
					}
					
				?>
			</div>
			<?php
		
				}
				
			?>
		</div>
	</div>
<div style="clear: both"></div>