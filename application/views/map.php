
<?php include 'partials/header.php' ?>

   <style>
      #map {
        height: 500px;
        width: 100%;
       }

       #mapProfile{
        height: 100px;
        width: 100px;
       }


/* The Modal (background) */

    </style>



    <div class="span9">
         </ul>
       
        
       <div class="row" >
 <div class="col-lg-4" style="margin-left:500px;margin-top:50px;margin-bottom:50px">
    <div class="input-group">
     
      <input type="text" class="form-control" placeholder="Search for...">
       <span class="input-group-btn">
        <button class="btn btn-success" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>

        
           
        <hr class="soft" />
        <div id="map"></div>
       

    <script>
       var curlat;
       var curlng;
       var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: new google.maps.LatLng(7.2906, 80.6337),
          mapTypeId: 'roadmap'
        });

        infoWindow = new google.maps.InfoWindow;

         if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            curlat = position.coords.latitude;
            curlng = position.coords.longitude;

            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location.');
            infoWindow.open(map);
            //map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

        setMarkers();
        }


        function setMarkers(){
        
        var features = [];

        <?php

      foreach ($allRestaurants as $item) {
    ?>
          features.push({position: new google.maps.LatLng(<?php echo $item->lattitiude; ?>, <?php echo $item->longtitiude; ?>),type: 'info', icon:<?php echo $item->id; ?> ,name:'<?php echo $item->restname; ?>'});
      <?php }?>
        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            animation: google.maps.Animation.DROP,
            title: feature.name,
            icon:  '<?php echo  base_url() ?>assets/images/'+ '6.png' ,
            map: map
          });
        });
       

        }


    function calculateAndDisplayRoute(directionsService, directionsDisplay, start, end) {
      // alert(start);
      // alert(end);
      directionsService.route({
        origin: start,
        destination: end,
        travelMode: 'DRIVING'
      }, function(response, status) {
        if (status === 'OK') {
          directionsDisplay.setDirections(response);
          // alert(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
    }


    </script>


           <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASed7m-nA1qJmxaRdN6f-eUFb6p0bhT_M&callback=initMap">
        </script>

        </script>
      

    <?php include 'partials/footer.php' ?>