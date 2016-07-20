<?php
  require("conexao.php");
  // Start XML file, create parent node
  $dom = new DOMDocument("1.0");
  $node = $dom->createElement("markers");
  $parnode = $dom->appendChild($node);

  // Opens a connection to a MySQL server
  $connection = new mysqli($host, $usuario, $senha, $bd);

//  if (!$connection) {  die('Not connected : ' . mysql_error());}

  // Select all the rows in the markers table

  $consulta = "select * from markers";
  $con = $mysqli->query($consulta) or die($mysli->error);

  while($dado=$con->fetch_array()){
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);
    echo $dado["name"];
  }


  $dom->save("/home/bordi/contatos.xml");

//  header("Content-Type: text/xml");
  print $dom->saveXML();

  //header("Content-type: text/xml");
/*
   $newnode = $parnode->appendChild($node);
   $newnode->setAttribute("name",$row['name']);
   $newnode->setAttribute("address", $row['address']);
   $newnode->setAttribute("lat", $row['lat']);
   $newnode->setAttribute("lng", $row['lng']);
   $newnode->setAttribute("type", $row['type']);
*/

?>
