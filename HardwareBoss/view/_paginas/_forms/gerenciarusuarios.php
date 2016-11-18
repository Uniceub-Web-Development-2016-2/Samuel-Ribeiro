
<?php

	$conexao = new DBConnector();
	$sql = $conexao->query("SELECT usuario, nome, email, datanasc FROM tb_users");

?>

<table id="user_table" border="1">
  <tr>
    <th>Úsuario</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th></th>
  </tr>
  
  <?php while($dado = $sql->fetch(PDO::FETCH_ASSOC)){ ?>
  <tr>
    <td><?php echo $dado["usuario"]; ?></td>
    <td><?php echo $dado["nome"]; ?></td>
    <td><?php echo $dado["email"]; ?></td>
    <td>
    	<a href="">
    		<input type="button" name="btnbanir" value="Banir"></input>
    	</a>
    </td>
  </tr>
  <?php } ?>
</table>

