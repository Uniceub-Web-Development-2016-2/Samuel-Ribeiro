<div id="left">
<?php
  
  $get_request = 'http://localhost/APIrest/tb_posts/search';

  $response = \Httpful\Request::get($get_request)->send();

  $values = json_decode($response->body, true);

  foreach($values as $row){

    $get_autor = 'http://localhost/APIrest/tb_users/search?id='.$row['autor'];

    $resposta = \Httpful\Request::get($get_autor)->send();

    $autor = json_decode($resposta->body, true)[0];

?>

<div class="date">
<span class="day"><?php echo getDay($row['data']); ?></span>
<span class="month"><?php echo getReducedMonth($row['data']); ?></span></div>
  
  <div class="container">
  
  <a href="?pagina=post&postid=<?php echo $row['id']; ?>" style="text-decoration: none">
    <div class="title">
    <?php echo $row['titulo']; ?>
    </div>
  </a>
   
   <div class="content">
   
   <?php 
  if(strlen($row['conteudo']) >= 450){
   echo substr($row['conteudo'], 0 ,450)."...";
   ?>

 <a href="?pagina=post&postid=<?php echo utf8_decode($row['id']); ?>">Leia mais</a>
 <?php
  
  } else {
   echo $row['conteudo'];
  }
  
 ?> 
    </div>
 
    <div class="autor">Por: <a href="">
      <?php echo $autor['nome']; ?></a>.
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