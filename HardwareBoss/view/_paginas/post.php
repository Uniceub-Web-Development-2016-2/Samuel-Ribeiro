<?php

	if(!isset($_GET['postid'])){
		header("location: home.php");
		die;
	}

	//GET POST
    $_query = "SELECT tb_posts.titulo, tb_posts.autor, tb_posts.conteudo, tb_posts.imagem, tb_posts.data, tb_users.nome FROM tb_posts INNER JOIN tb_users ON (tb_users.id = tb_posts.autor) WHERE tb_posts.id = '".$_GET['postid']."'";

    $url = "http://localhost/APIrest/custom/custom_query";

	$query = array('query' => $_query);

	$body = json_encode($query);
		
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 

	$row = json_decode($response->body, true)[0];

	//Keywords
	$keywords = explode(' ', $row['titulo']);
	
	$filter = "";
	
	//Generate KeyWords for filter
	for($i = 0; $i < count($keywords); $i++){
		$filter = $filter.($i == 0 ? "" : " OR")." titulo like '%".str_replace(' ', '', $keywords[$i])."%'";
	}

	//Search related Posts
	$_query = "SELECT * FROM tb_posts WHERE (".$filter.") AND id != ".$_GET['postid'];

	$query = array('query' => $_query);

	$body = json_encode($query);
	$url = "http://localhost/APIrest/custom/custom_query";
		
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 

	$_relacionados = json_decode($response->body, true);


	//Get comments
	$_query = "SELECT * FROM tb_comments INNER JOIN tb_users ON tb_users.id = tb_comments.autor WHERE post_id = '".$_GET['postid']."'";

	$query = array('query' => $_query);

	$body = json_encode($query);
		
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 

	$_comments = json_decode($response->body, true);

?>
<div id="left">
	<div class="container">
	<?php 
	
		if(count($row) <= 0) { echo "Postagem não encontrada."; } else {
	
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
		
			foreach($_comments as $comments){
		
		?>
			<div class="comment">
				<div class="title"><div><?php echo $comments['titulo']; ?></div><div class="autor"><a href="#"><?php echo $comments['nome']; ?></a> - <?php echo $comments['data']; ?></div></div>
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
				
					if(count($_relacionados) > 0){

						foreach($_relacionados as $relacionados){
				
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