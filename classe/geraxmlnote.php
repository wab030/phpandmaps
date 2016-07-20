<meta charset="utf-8">
<?php
  require("conexao.php");
  // Start XML file, create parent node
  $dom = new DOMDocument("1.0");
  $dom->formatOutput = true;
  $node = $dom->createElement("markers");
  $parnode = $dom->appendChild($node);
  $dom->preserveWhiteSpace = false;

  // Opens a connection to a MySQL server
  $connection = new mysqli($host, $usuario, $senha, $bd);

//  if (!$connection) {  die('Not connected : ' . mysql_error());}

  // Select all the rows in the markers table

  $consulta = "select * from markers";
  $con = $mysqli->query($consulta) or die($mysli->error);
  header("Content-Type: text/xml");

  while($dado=$con->fetch_array()){
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);
  }

  echo $dom->saveXML();

?>
