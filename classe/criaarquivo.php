<meta charset="utf-8">
<?php
  //echo "Funcao para criar arquivo";
  //echo "Cuidado com permissões";
  $arquivo = 'Teste.txt';
  $conteudo = 'teste <br/>';
  $result = file_put_contents($arquivo,$conteudo); //Sempre reescreve o arquivo
  $result = file_put_contents($arquivo,$conteudo, FILE_APPEND); //Adiciona conteúdo ao arquivo.
  // A variável result mostra a quantidade de bytes gravados.

  //Para exibir como uma página HTML devemos utilizar o get.
  echo '<hr/>';
  print file_get_contents($arquivo);


  //Para gerar uma quebra de linha no próprio arquivo utilizamos \n
  //Repare que para o \n funcionar devemos utilizar aspas dupla "
  $conteudo = "\n\n nova linha no arquivo \n";
  $result = file_put_contents($arquivo,$conteudo, FILE_APPEND);


 ?>
