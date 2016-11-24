
<?php

  include_once('Httpful.phar');

  $get_request = 'http://localhost:8080/APIrest/tb_users/search';

  $response = \Httpful\Request::get($get_request)->send();

  $values = json_decode($response->body, true);

?>

<table id="user_table" border="1">
  <tr>
    <th>Úsuario</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th></th>
  </tr>



  <?php foreach($values as $user){ ?>
  <tr>
    <td><?php echo $user["usuario"]; ?></td>
    <td><?php echo $user["nome"]; ?></td>
    <td><?php echo $user["email"]; ?></td>
    <td>
    <form action="scripts/deletar.php" method="post" style="margin: 0; padding: 0;">
        <input type="submit" name="btnbanir" value="Deletar"></input>
        <input name="id" type="hidden" value="<?php echo $user["id"]; ?>" >
    </form>
    </td>
  </tr>
  <?php } ?>
</table>

