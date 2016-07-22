<html>
  <head>
    <title>Script para ler um XML</title>
    <script type="text/javascript">
        function botao(){
          var ajax = new XMLHttpRequest();
          // quando o objeto for carregado
          // status=200. statusText=OK, responseText. responseXML
          ajax.onreadystatechange = function(){
            if (ajax.readyState == 4){
              alert("Req recebida");
              var xml = ajax.responseXML;
              var markers = xml.getElementsByTagName("marker");
              for (var i = 0; i < markers.length; i++) {
                var name = markers[i].getAttribute("name");
                var address = markers[i].getAttribute("address");
                var type = markers[i].getAttribute("type");
                document.write(name, address, type);
              }
            }
          }
          ajax.open("POST", "markers.xml");
          ajax.send(null);
          return false;
        }

    </script>

  </head>
  <body>
		<p>
			<input type = "submit" value = "Submit" onclick="botao();"/> <br />
		</p>



  </body>
</html>
