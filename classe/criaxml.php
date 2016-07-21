<?php
    //Rotina para criar XML do zero
    //echo "Teste criar xml";
    $dom = new DOMDocument();
    $livro = $dom->createElement("livros");
    $dom->AppendChild($livro);
    $item = $dom->createElement("item");
    $livro->AppendChild($item);
    $autor = $dom->createElement("autor", "Mara");
    $item->AppendChild($autor);


    echo "<pre>";
    $dom->formatOutput = TRUE;
    echo htmlentities($dom->saveXML());
    echo "</pre>";

    //echo "Teste criar xml";


 ?>
