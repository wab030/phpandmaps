<?php
  // Start XML file, create parent node
  echo "Tedste";
  $dom = new DOMDocument("1.0");
  $node = $dom->createElement("markers");
  $parnode = $dom->appendChild($node);

  echo "Teste2"

  $node = $dom->createElement("marker");
  $newnode->setAttribute("name","Andre");
  $newnode->setAttribute("address", "Rua");
  $newnode->setAttribute("lat", "2.3");
  $newnode->setAttribute("lng", "1.2");
  $newnode->setAttribute("type", "restua");



  echo $dom->saveXML();


?>
