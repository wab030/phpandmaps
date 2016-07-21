<?php
    //Rotina para criar XML do zero
    //echo "Teste criar xml";
    $dom = new DOMDocument();
    $dom->load('exemplo.xml');
    echo "<pre>";
    $dom->formatOutput = TRUE;
    echo htmlentities($dom->saveXML());
    echo "</pre>";

    //echo "Teste criar xml";


 ?>
