<?php
  include("classe/conexao.php");
  $consulta = "select * from markers";
  $con = $mysqli->query($consulta) or die($mysli->error);
?>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <table>
      <?php while($dado=$con->fetch_array()){?>
      <tr>
        <td><?php echo $dado["name"]; ?></td>
      </tr>
      <?php } ?>
  </body>
</html>
