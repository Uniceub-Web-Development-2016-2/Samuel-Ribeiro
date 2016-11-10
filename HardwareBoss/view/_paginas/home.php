<div id="left">
<?php
  include_once('db/conexao.php');
  
  $conexao = new DBConnector();
 
  $sql = $conexao->query("SELECT tb_posts.id, tb_posts.titulo, tb_posts.autor,tb_posts.data, tb_posts.conteudo, tb_posts.imagem, tb_users.nome FROM tb_posts INNER JOIN tb_users ON (tb_users.id = tb_posts.autor) WHERE IsExcluido = false");

  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
?>


<div class="date"><span class="day"><?php echo getDay($row['data']); ?></span><span class="month"><?php echo getReducedMonth($row['data']); ?></span></div>
  <div class="container">
  
  <a href="?pagina=post&postid=<?php echo $row['id']; ?>" style="text-decoration: none">
    <div class="title">
    <?php echo utf8_decode($row['titulo']); ?>
    </div>
  </a>
   
   <div class="content">
   
   <?php 
  if(strlen($row['conteudo']) >= 450){
   echo substr(utf8_decode($row['conteudo']), 0 ,450)."...";
   ?>

 <a href="?pagina=post&postid=<?php echo utf8_decode($row['id']); ?>">Leia mais</a>
 <?php
  
  } else {
   echo utf8_decode($row['conteudo']);
  }
  
 ?> 
    </div>
 
    <div class="autor">Por: <a href="">
    <?php echo utf8_decode($row['nome']); ?></a>.
    </div>

  </div>

  <?php 
  }
   ?>
 </div>
 
 <div id="right">
  <div class="container">
   <div class="title" id="popular">Mais populares</div>
   <div class="content">Conteúdo</div>
  </div>
  <div class="container">
   <div class="title">Outra coisa</div>
   <div class="content">Conteúdo</div>
  </div>
 </div>
 
 <div style="clear: both"></div>