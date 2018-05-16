
 <div id="map" style="height:450px"></div>
      
 
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        var uluru = {lat: <?php echo floatval($odc[0]->odpKordX) ?>, lng: <?php echo floatval($odc[0]->odpKordY) ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
      </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsHHoz7JsYndlJGxGwU2OT-W--ZKM1Cos&callback=initMap">
    </script>
    