<?php
  require("classe/conexao.php");
// Start XML file, create parent node
  $dom = new DOMDocument();
  $node = $dom->createElement("markers");
  $dom->AppendChild($node);

  //abrindo o banco e rodando a query
  $connection = new mysqli($host, $usuario, $senha, $bd);
  $consulta = "select * from markers";
  $con = $mysqli->query($consulta) or die($mysli->error);

  while($dado=$con->fetch_array()){
    $no = $dom->createElement("marker");
    $node->AppendChild($no);
    $no->setAttribute("name",$dado['name']);
    $no->setAttribute("address", $dado['address']);
    $no->setAttribute("lat", $dado['lat']);
    $no->setAttribute("lng", $dado['lng']);
    $no->setAttribute("type", $dado['type']);
  }

//  header("Content-Type: text/xml");
  $dom->save("markers.xml");

  echo "<pre>";
  $dom->formatOutput = TRUE;
  echo htmlentities($dom->saveXML());
  echo "</pre>";

  ?>
