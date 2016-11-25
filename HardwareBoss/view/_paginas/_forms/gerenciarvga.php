<?php

  include_once('Httpful.phar');

  $get_request = 'http://localhost:8080/APIrest/tb_vga/search';

  $response = \Httpful\Request::get($get_request)->send();

  $values = json_decode($response->body, true);

?>

<table id="user_table" border="1">
  <tr>
    <th>Nome</th>
    <th>Modelo</th>
    <th>Website</th>
    <th></th>
  </tr>



  <?php foreach($values as $vga){ ?>
  <tr>
    <td><?php echo $vga["nome"]; ?></td>
    <td><?php echo $vga["model"]; ?></td>
    <td><?php echo $vga["website"]; ?></td>
    <td>
    <form action="scripts/deletarvga.php" method="post" style="margin: 0; padding: 0;">
        <input type="submit" name="btnbanir" value="Deletar"></input>
        <input name="id" type="hidden" value="<?php echo $vga["id"]; ?>" >
    </form>
    </td>
  </tr>
  <?php } ?>
</table>
