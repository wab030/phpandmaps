<?php
  echo "<p> Conexao funcionando </p>";

  $host = "localhost";
  $usuario = "root";
  $senha = "Bordi1973";
  $bd = "maps";

  $mysqli = new mysqli($host, $usuario, $senha, $bd);

  if($mysqli->connect_errno)
    echo "Falha na conexão";


  //$conecta = mysql_connect("locahost", "root", "Bordi1973") or print (mysql_error());
/*print "Conexão OK!";
mysql_close($conecta);*/
?>
