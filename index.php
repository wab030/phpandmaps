<!DOCTYPE html>
<html>
  <head>
    <title>Mapa simples</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -22.858333, lng: -47.220000},
          zoom: 13
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDAjooQkh2ExpXCp5uF_8P8f-bfLzJ2KM&callback=initMap">
    </script>
  </body>

</html>
